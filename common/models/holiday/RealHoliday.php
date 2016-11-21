<?php

namespace common\models\holiday;

use Yii;

/**
 * This is the model class for table "real_holiday".
 *
 * @property integer $id
 * @property string $data_str
 * @property integer $data_int
 * @property string $updated_at
 */
class RealHoliday extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_real_holiday';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_int'], 'integer'],
            [['updated_at'], 'safe'],
            [['data_str'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_str' => 'Data Str',
            'data_int' => 'Data Int',
            'updated_at' => 'Updated At',
        ];
    }
}
