<?php

namespace frontend\models\user;

use Yii;

/**
 * This is the model class for table "gp_withdraw".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $amount
 * @property string $date_str
 * @property integer $date_int
 * @property integer $status
 */
class Withdraw extends \common\models\user\Withdraw
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_withdraw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'date_int', 'status'], 'integer'],
            [['amount', 'date_int'], 'required'],
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
            'date_str' => 'Date Str',
            'date_int' => 'Date Int',
            'status' => 'Status',
        ];
    }
}
