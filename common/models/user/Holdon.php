<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "gp_holdon".
 *
 * @property integer $id
 * @property integer $uid
 * @property integer $gp_id
 * @property string $gp_code
 * @property string $buy_time
 * @property integer $gushu
 * @property string $update_at
 */
class Holdon extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_holdon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'uid', 'gp_id', 'gp_code', 'gushu'], 'required'],
            [['id', 'uid', 'gp_id', 'gushu'], 'integer'],
            [['buy_time', 'update_at'], 'safe'],
            [['gp_code'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'gp_id' => 'Gp ID',
            'gp_code' => 'Gp Code',
            'buy_time' => 'Buy Time',
            'gushu' => '0.01手',
            'update_at' => 'Update At',
        ];
    }
}
