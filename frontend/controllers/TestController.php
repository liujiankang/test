<?php
namespace frontend\controllers;

use common\models\config\RuntimeConfig;
use common\models\config\HolidayRaw;
use common\models\config\HolidayReal;
use yii\db\Query;
use Yii;


/**
 * Site controller
 */
class TestController extends BaseController
{

    public $thisTime;
    public $thisLastTime;

    public function init()
    {
        $lastTimes = RuntimeConfig::findOne(['action' => 'holiday_update']);
        if (empty($lastTimes)) {
            echo 'holidayUpdate config error';
        }
        $this->thisTime = time();
        $this->thisLastTime = $lastTimes->last_time;
    }

    public function actionIndex()
    {
        if (!$this->isNeedUpdate()) {
            echo 'not need to update';
            exit;
        }
        $needUpdateMonths = $this->getNeedUpdateMonths();
        foreach ($needUpdateMonths as $month) {
            $holidays = $this->getHolidayOfOneMonth($month);
            $gupiaoDay = $this->getOneMonthGupiaoDays($holidays);
            $deletNum = $this->delOneMonthGupiaoDays($holidays);
            $addNum = $this->addOneMonthGupiaoDays($gupiaoDay);
            print_r([$month, $holidays, $gupiaoDay, $deletNum, $addNum]);
            //die;
        }
    }

    public function isNeedUpdate()
    {
        $isHave = (new Query())->select('id')->from(HolidayRaw::tableName())->where(['>', 'unix_timestamp(updated_at)', $this->thisLastTime])->one();
        return (bool)$isHave;
    }

    public function getNeedUpdateMonths()
    {
        $months = (new Query())->select('*')->from(HolidayRaw::tableName())->where(['>', 'unix_timestamp(updated_at)', $this->thisLastTime])->all();
        if (!$months) {
            return [];
        }
        $monthNeedUpdate = [];
        foreach ($months as $month) {
            $monthTemp = substr($month['date_str'], 0, 7);
            if (!in_array($monthTemp, $monthNeedUpdate)) {
                array_push($monthNeedUpdate, $monthTemp);
            }
        }
        return $monthNeedUpdate;
    }

    public function getHolidayOfOneMonth($date)
    {
        $month = substr($date, 0, 8);
        return $oneMonthHolidays = HolidayRaw::find()
            ->where(['like', 'date_str', $month])
            ->all();
    }

    public function getOneMonthGupiaoDays($monthHolidays)
    {
        if (is_array($monthHolidays) && count($monthHolidays) >= 1) {
            $date = current($monthHolidays);
            $timeTemp = strtotime($date);
            $monthStart = mktime(0, 0, 0, date('m', $timeTemp), 1, date('Y', $timeTemp));
            $monthEnd = mktime(23, 59, 59, date('m', $timeTemp) + 1, 0, date('Y', $timeTemp));
            $oneMonthGupiaoDays = [];
            for ($i = $monthStart; $i <= $monthEnd; $i = $i + 86400) {
                $day = date('Y-m-d', $i);
                $weekday = date('w', $i);
                if (!in_array($day, $monthHolidays) && !in_array($weekday, [0, 6])) {
                    array_push($oneMonthGupiaoDays, $day);
                }
            }
            return $oneMonthGupiaoDays;
        } else {
            return false;
        }
    }

    public function delOneMonthGupiaoDays($gupiaoDays)
    {
        if (is_array($gupiaoDays) && count($gupiaoDays) > 0) {
            $date = current($gupiaoDays);
            $month = substr($date, 0, 8);
            if (strlen($month) != 8) {
                return false;
            }
            $delModel = HolidayReal::deleteAll(['like', 'date_str', $month]);
            return $delModel;
        }
        return false;
    }

    public function delOneMonthHolidayDays($holidays)
    {
        foreach ($holidays as $days){
            HolidayReal::updateAll(['status' => 0, 'type' => $days['type']], ['date_str' => $days['date_str']]);
        }
    }

    public function addOneMonthGupiaoDays($gupiaoDays)
    {
        return HolidayReal::updateAll(['status' => 1, 'type' => ''], ['date_str' => $gupiaoDays]);
    }

    public function delOneMonthHolidayDaysHeard($holidays)
    {
        if (is_array($holidays) && count($holidays) > 0) {
            $delModel = HolidayReal::find()->where(['date_str' => $holidays])->all();
            if ($delModel) {
                foreach ($delModel as $del) {
                    $del->delete();
                }
            }
        }
        return false;
    }

    public function addOneMonthGupiaoDaysHeard($gupiaoDays)
    {
        if (is_array($gupiaoDays) && count($gupiaoDays) > 0) {
            foreach ($gupiaoDays as &$val) {
                $val = [$val, strtotime($val)];
            }

            return HolidayReal::find()->createCommand()->batchInsert(HolidayReal::tableName(), ['date_str', 'date_int'], $gupiaoDays)->execute();
        }
    }
}
