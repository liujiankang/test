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
 * @property integer $income_type
 * @property integer $action_time
 * @property string $date_str
 * @property integer $status
 */
class AccountLog extends \common\models\BaseModel
{
    const ACTION_TYPE_CHARGE = 1;
    const ACTION_TYPE_WITHDRAW = 2;
    const ACTION_TYPE_INCOME_GUPIAO_LIXI = 3;
    const ACTION_TYPE_INCOME_GUPIAO_DIFF_PRICE = 4;
    const ACTION_TYPE_FEE_YINHUA_BUY = 5;
    const ACTION_TYPE_FEE_YINHUA_SOLD = 6;
    const ACTION_TYPE_FEE_YONGJIN_BUY = 7;
    const ACTION_TYPE_FEE_YONGJIN_SOLD = 8;
    const ACTION_TYPE_FEE_GUOHU_BUY = 9;
    const ACTION_TYPE_FEE_GUOHU_SOLD = 10;
    const ACTION_TYPE_INCOME_JIANGLI = 11;

    const INCOME_TYPE_DEFAULT = 0;
    const INCOME_TYPE_IN = 1;
    const INCOME_TYPE_OUT = -1;

    public $actionTypeMap = [
        self::ACTION_TYPE_CHARGE => '充值',
        self::ACTION_TYPE_WITHDRAW => '提现',
        self::ACTION_TYPE_INCOME_GUPIAO_LIXI => '股息分红',
        self::ACTION_TYPE_INCOME_GUPIAO_DIFF_PRICE => '股票卖出差价',
        self::ACTION_TYPE_FEE_YINHUA_BUY => '印花税（买）',
        self::ACTION_TYPE_FEE_YINHUA_SOLD => '印花税（卖）',
        self::ACTION_TYPE_FEE_YONGJIN_BUY => '佣金（买）',
        self::ACTION_TYPE_FEE_YONGJIN_SOLD => '佣金（卖）',
        self::ACTION_TYPE_FEE_GUOHU_BUY => '过户（买）',
        self::ACTION_TYPE_FEE_GUOHU_SOLD => '过户（卖）',
        self::ACTION_TYPE_INCOME_JIANGLI => '其他奖励',
    ];
    public $incomeTypeMap = [0 => '平衡', 1 => '收入', 2 => '支出'];

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
            [['user_id', 'action_type', 'income_type', 'action_time', 'status'], 'integer'],
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
            'amount' => '数量',
            'action_type' => '类型',
            'income_type' => '利润收入方向',
            'action_time' => '操作时间',
            'date_str' => 'Date Str',
            'status' => 'Status',
        ];
    }
}
