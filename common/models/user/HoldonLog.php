<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "gp_holdon_log".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $gp_id
 * @property integer $gp_amount
 * @property string $gp_prices
 * @property integer $action_time
 * @property integer $action_type
 * @property string $update_at
 */
class HoldonLog extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_holdon_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'gp_id', 'gp_amount', 'gp_prices', 'action_type'], 'required'],
            [['id', 'user_id', 'gp_id', 'gp_amount', 'action_time', 'action_type'], 'integer'],
            [['gp_prices'], 'number'],
            [['update_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'gp_id' => 'Gp ID',
            'gp_amount' => '0.01手',
            'gp_prices' => 'when buy one unit money ',
            'action_time' => 'Action Time',
            'action_type' => '1buy 2sold',
            'update_at' => 'Update At',
        ];
    }
}
