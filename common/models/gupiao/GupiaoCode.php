<?php

namespace common\models\gupiao;

use Yii;

/**
 * This is the model class for table "gp_gupiao_code".
 *
 * @property integer $id
 * @property string $code
 * @property string $type
 * @property integer $status
 * @property string $name
 * @property string $date_str
 * @property integer $date_int
 * @property string $creat_at
 * @property string $update_at
 */
class GupiaoCode extends \common\models\BaseModel
{
    const STATUS_OPEN = 1;//正常
    const STATUS_CLOSE = 2;//停牌
    const STATUS_DIE = 3;//退市
    const STATUS_CONVERT = 4;//转变为其他股票

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_gupiao_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'type', 'status', 'date_str', 'date_int'], 'required'],
            [['status', 'date_int'], 'integer'],
            [['creat_at', 'update_at'], 'safe'],
            [['code', 'type'], 'string', 'max' => 8],
            [['date_str', 'name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'type' => 'Type',
            'status' => 'Status',
            'name' => 'Name',
            'date_str' => 'Date Str',
            'date_int' => 'Date Int',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
