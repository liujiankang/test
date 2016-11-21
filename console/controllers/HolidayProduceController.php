<?php
namespace console\controllers;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
use frontend\models\RawHoliday;
use frontend\models\RealHoliday;
use \yii\db\Query;
use yii\console\Controller;
use Yii;

class HolidayProduceController extends Controller
{
    public $thisTime;
    public $thisLastTime;

    public function init()
    {
        parent::init();
        $this->thisTime = time();
        $this->thisLastTime = 0;
    }

    public function actionRun()
    {
        if (!$this->isNeedUpdate()) exit;
        $needUpdateMonths = $this->getNeedUpdateMonths();
        foreach ($needUpdateMonths as $month) {
            $holidays = $this->getHolidayOfOneMonth($month);
            $gupiaoDay = $this->getOneMonthGupiaoDays($holidays);
            $deletNum = $this->delOneMonthGupiaoDays($gupiaoDay);
            print_r([$month, $holidays, $gupiaoDay, $deletNum]);
            die;
        }
    }

    public function isNeedUpdate()
    {
        $isHave = (new Query())->select('id')->from($this->rawHolidayTable)->where(['>', 'unix_timestamp(updated_at)', $this->thisLastTime])->one();
        return (bool)$isHave;
    }

    public function getNeedUpdateMonths()
    {
        $months = (new Query())->select('*')->from($this->rawHolidayTable)->where(['>', 'unix_timestamp(updated_at)', $this->thisLastTime])->all();
        $monthNeedUpdate = [];
        foreach ($months as $month) {
            $monthTemp = date('Y-m', $month['date_int']);
            if (!in_array($monthTemp, $monthNeedUpdate)) {
                array_push($monthNeedUpdate, $monthTemp);
            }
        }
        return $monthNeedUpdate;
    }

    public function getHolidayOfOneMonth($date)
    {
        $month = substr($date, 0, 8);
        $oneMonthHolidays = (new Query())->select('date_str')->from($this->rawHolidayTable)->where(['like', 'date_str', "$month"])->all();
        return array_column($oneMonthHolidays, 'date_str');
    }

    public function getOneMonthGupiaoDays($monthHolydays)
    {
        if (is_array($monthHolydays) && count($monthHolydays) >= 1) {
            $date = current($monthHolydays);
            $timeTemp = strtotime($date);
            $monthStart = mktime(0, 0, 0, date('m', $timeTemp), 1, date('Y', $timeTemp));
            $monthEnd = mktime(23, 59, 59, date('m', $timeTemp) + 1, 0, date('Y', $timeTemp));
            $oneMonthGupiaoDays = [];
            for ($i = $monthStart; $i <= $monthEnd; $i = $i + 86400) {
                $day = date('Y-m-d', $i);
                if (!in_array($day, $monthHolydays)) {
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
            return RealHoliday::deleteAll([['like', 'date_str', $month], ['not in ', 'date_str', $gupiaoDays]]);
        }
        return false;
    }

    public function addOneMonthGupiaoDays($gupiaoDays)
    {
        if (is_array($gupiaoDays) && count($gupiaoDays) > 0) {
            foreach ($gupiaoDays as &$val) {
                $val = [$val, strtotime($val)];
            }
            return Yii::$app->getDb()->createCommand()->batchInsert(RealHoliday::tableName(), ['date_str', 'date_int'], $gupiaoDays);
        }
    }
}




