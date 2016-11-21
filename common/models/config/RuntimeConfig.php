<?php

namespace common\models\config;

use Yii;

/**
 * This is the model class for table "runtime_config".
 *
 * @property integer $id
 * @property string $model
 * @property string $action
 * @property integer $last_time
 * @property string $describe
 */
class RuntimeConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_runtime_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'action', 'last_time'], 'required'],
            [['id', 'last_time'], 'integer'],
            [['model', 'action', 'describe'], 'string', 'max' => 20],
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
            'describe' => 'Describe',
        ];
    }
}
