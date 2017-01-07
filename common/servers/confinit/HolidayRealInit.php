<?php
namespace common\servers\confinit;

use common\models\config\HolidayReal;
use Yii;

/**
 * init holiday real
 */
class HolidayRealInit
{
    public $timeFrom;
    public $timeTo;
    public $batchNum = 100;

    public function __construct()
    {
        $this->timeFrom = strtotime('2000-01-01');
        $this->timeTo = strtotime('2031-01-01');
    }

    public function actionRun()
    {
        $isHave = HolidayReal::findOne(100);
        if ($isHave) {
            Yii::warning('gupiao day already filled, please init holiday', __METHOD__);
            return true;
        }

        $addDays = [];
        for ($i = $this->timeFrom; $i < $this->timeTo; $i += 86400) {
            $weekday = date('w', $i);
            if (in_array($weekday, [1, 2, 3, 4, 5])) {
                $day = date('Y-m-d', $i);
                array_push($addDays, [$day, $i]);
            }
            if (count($addDays) > $this->batchNum) {
                $result = $this->addGupiaoDays($addDays);
                if ($result != count($addDays)) {
                    Yii::error(['msg' => 'gupiao day fill error', 'data' => $addDays], __METHOD__);
                    return false;
                } else {
                    $addDays = [];
                }
            }
        }
        //最后的次数可能不够一批
        $result = $this->addGupiaoDays($addDays);
        if ($result != count($addDays)) {
            Yii::error(['msg' => 'gupiao day fill error', 'data' => $addDays], __METHOD__);
            return false;
        } 
        Yii::info('gupiao day fill done', __METHOD__);
        return true;
    }


    public function addGupiaoDays($gupiaoDays)
    {
        return HolidayReal::find()->createCommand()->batchInsert(HolidayReal::tableName(), ['date_str', 'date_int'], $gupiaoDays)->execute();
    }
}
