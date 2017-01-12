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

class SwitchJsonStrAndArrayBehavior extends Behavior
{
    public $jsonStr='detail';

    public function events()
    {
        return [
            BaseActiveRecord::EVENT_AFTER_FIND => 'SwitchJsonStrToArray',
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'SwitchArrayToJsonStr',
            BaseActiveRecord::EVENT_BEFORE_INSERT => 'SwitchArrayToJsonStr',
        ];
    }

    public function SwitchJsonStrToArray()
    {
        $jsonStr=$this->jsonStr;
        if (isset($this->owner) && isset($this->owner->$jsonStr)) {
            if (!empty($this->owner->$jsonStr)) {
                $this->owner->$jsonStr=json_decode($this->owner->$jsonStr,true);
            }
        }
    }

    public function SwitchArrayToJsonStr()
    {
        $jsonStr=$this->jsonStr;
        if (isset($this->owner) && isset($this->owner->$jsonStr) && !empty($jsonStr=$this->jsonStr)) {
            $this->owner->$jsonStr=json_encode($this->owner->$jsonStr);
        }
    }
}
