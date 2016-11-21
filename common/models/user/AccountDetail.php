<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "gp_charge".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $amount
 * @property integer $type
 * @property string $date_str
 * @property integer $date_int
 * @property integer $status
 */
class AccountDetail extends \yii\db\ActiveRecord
{
    const TYPE_CHARGE=1;//充值
    const TYPE_WITHDRAW=2;//提现
    const TYPE_INCOME=3;//现金分红
    const TYPE_FEE=4;//手续费

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_account_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'date_int','type', 'status'], 'integer'],
            [['amount', 'date_int','type'], 'required'],
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
            'uid' => 'Uid',
            'amount' => 'Amount',
            'type' => 'Type',
            'date_str' => 'Date Str',
            'date_int' => 'Date Int',
            'status' => 'Status',
        ];
    }
}
