<?php

namespace common\models\user;

use Yii;
use common\models\user\AccountLog;
/**
 * This is the model class for table "gp_account_data".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $charge_money
 * @property string $withdraw_money
 * @property string $invested_money
 * @property string $investing_money
 * @property string $available_money
 * @property string $income_money
 * @property string $fee_money
 * @property integer $status
 * @property integer $update_int
 * @property string $update_at
 */
class AccountData extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_account_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'update_int'], 'required'],
            [['user_id', 'status', 'update_int'], 'integer'],
            [['charge_money', 'withdraw_money', 'invested_money', 'investing_money', 'available_money', 'income_money', 'fee_money'], 'number'],
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
            'charge_money' => '充值总金额',
            'withdraw_money' => '提现总金额',
            'invested_money' => '投资总金额',
            'investing_money' => '投资中金额',
            'available_money' => '剩余可用金额',
            'income_money' => '收入金额',
            'fee_money' => '支出金额',
            'status' => '状态',
            'update_int' => 'Update Int',
            'update_at' => 'Update At',
        ];
    }
}
