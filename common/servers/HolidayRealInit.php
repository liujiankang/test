<?php
namespace common\servers;

use common\models\config\HolidayReal;

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
            echo 'already done';
            die;
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
                    echo 'error' . PHP_EOL;
                    var_dump($addDays);
                    die;
                } else {
                    $addDays = [];
                }
            }
        }

        $result = $this->addGupiaoDays($addDays);
        if ($result != count($addDays)) {
            var_dump($addDays);
            die;
        } else {
            $addDays = [];
        }
    }


    public function addGupiaoDays($gupiaoDays)
    {
        return HolidayReal::find()->createCommand()->batchInsert(HolidayReal::tableName(), ['date_str', 'date_int'], $gupiaoDays)->execute();
    }
}
