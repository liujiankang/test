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
 * @property integer $is_downed
 * @property string $updated_at
 */
class HolidayReal extends \common\models\BaseModel
{
    const DOWN_STATUS_NOT_BEGAN = 0;
    const DOWN_STATUS_DOWNING = 1;
    const DOWN_STATUS_DONE = 2;
    const DOWN_STATUS_EXCEPTION = 3;

    const STATUS_HOLIDAY = 0;
    const STATUS_WORKDAY = 1;

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
            [['date_int', 'status', 'is_downed'], 'integer'],
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
            'is_downed' => 'is_downed',
            'updated_at' => 'Updated At',
        ];
    }
}
