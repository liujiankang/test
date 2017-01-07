<?php

namespace common\models\config;

use Yii;

/**
 * This is the model class for table "gp_holiday_real".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $date_int
 * @property string $type
 * @property integer $status
 * @property string $updated_at
 */
class HolidayReal extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_holiday_real';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_int','status'], 'integer'],
            [['updated_at'], 'safe'],
            [['date_str'], 'string', 'max' => 10],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_str' => 'Date Str',
            'date_int' => 'Date Int',
            'type' => 'Type',
            'status' => 'Status',
            'updated_at' => 'Updated At',
        ];
    }
}
