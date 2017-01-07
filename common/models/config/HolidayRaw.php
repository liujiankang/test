<?php

namespace common\models\config;

use Yii;
use common\behavior\DateStrIntBehavior;

/**
 * This is the model class for table "gp_holiday_raw".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $date_int
 * @property string $type
 * @property string $updated_at
 */
class HolidayRaw extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    const STATUS_INVALID = 0;
    const STATUS_VALID = 1;

    public static function tableName()
    {
        return 'gp_holiday_raw';
    }

    public function behaviors()
    {
        $parentBehavior = parent::behaviors();
        array_push($parentBehavior, ['class' => DateStrIntBehavior::className()]);
        return $parentBehavior;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_int'], 'integer'],
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
            'updated_at' => 'Updated At',
        ];
    }
}
