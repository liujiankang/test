<?php

namespace common\models\user;

use Yii;

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
            [['id', 'user_id', 'update_int'], 'required'],
            [['id', 'user_id', 'update_int'], 'integer'],
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
            'charge_money' => 'Charge Money',
            'withdraw_money' => 'Withdraw Money',
            'invested_money' => 'Invested Money',
            'investing_money' => 'Investing Money',
            'available_money' => 'Available Money',
            'income_money' => 'Income Money',
            'fee_money' => 'Fee Money',
            'update_int' => 'Update Int',
            'update_at' => 'Update At',
        ];
    }
}
