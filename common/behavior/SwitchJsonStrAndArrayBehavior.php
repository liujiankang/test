<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/26
 * Time: 21:10
 */
namespace common\behavior;

use yii\base\Behavior;
use yii\db\BaseActiveRecord;

class ConvertStrJsonBehavior extends Behavior
{
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'StrToJsonSwitch',
            BaseActiveRecord::EVENT_BEFORE_INSERT => 'JsonToStrIntSwitch',
        ];
    }

    public function DateStrIntSwitch()
    {
        if (isset($this->owner->date_str) && isset($this->owner->date_int)) {
            $dateInt = strtotime($this->owner->date_str);
            if ($dateInt > 0) {
                $this->owner->date_int = $dateInt;
            } elseif ($this->owner->date_int > 0) {
                $this->owner->date_str = date('Y-m-d', $this->owner->date_int);
            } else {
                $this->owner->date_str = '';
                $this->owner->date_int = 0;
            }
        }
    }
}
