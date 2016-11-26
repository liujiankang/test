<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "gp_account_log".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $amount
 * @property integer $action_type
 * @property integer $action_time
 * @property string $date_str
 * @property integer $status
 */
class AccountLog extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_account_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount', 'action_type', 'action_time'], 'required'],
            [['user_id', 'action_type', 'action_time', 'status'], 'integer'],
            [['amount'], 'number'],
            [['date_str'], 'safe'],
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
            'amount' => 'Amount',
            'action_type' => '类型',
            'action_time' => 'Action Time',
            'date_str' => 'Date Str',
            'status' => 'Status',
        ];
    }
}
