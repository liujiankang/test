<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "raw_holiday".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $date_int
 * @property string $type
 * @property string $updated_at
 */
class RawHoliday extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raw_holiday';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_int'], 'integer'],
            [['updated_at'], 'safe'],
            [['date_str', 'type'], 'string', 'max' => 20],
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
