<?php

namespace common\models\config;

use common\behavior\SwitchJsonStrAndArrayBehavior;
use Yii;

/**
 * This is the model class for table "gp_runtime_config".
 *
 * @property integer $id
 * @property string $model
 * @property string $action
 * @property integer $last_time
 * @property integer $status
 * @property string $detail
 * @property string $describe
 */
class RuntimeConfig extends \common\models\BaseModel
{
    const STATUS_VALID = 1;
    const STATUS_INVALID = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_runtime_config';
    }

//    public function behaviors()
//    {
//        $parentBehavior = parent::behaviors();
//        array_push($parentBehavior, ['class' => SwitchJsonStrAndArrayBehavior::className()]);
//        return $parentBehavior;
//    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['action', 'last_time', 'status'], 'required'],
            [['last_time', 'status'], 'integer'],
            [['detail'], 'string'],
            [['model', 'action', 'describe'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'action' => 'Action',
            'last_time' => 'Last Time',
            'status' => 'Status',
            'detail' => '保留现场信息',
            'describe' => 'Describe',
        ];
    }
}
