<?php
namespace common\servers\user;

use common\models\config\RuntimeConfig;
use common\models\user\AccountData;
use common\models\user\AccountLog;
use common\servers\BaseService;
use Yii;

class UserAccount extends BaseService
{

    public $accountTable;
    public $accountLogTable;
    public $action_time;

    public function init()
    {
        parent::init();
        $this->accountLogTable = AccountLog::tableName();
        $this->accountTable = AccountData::tableName();
        $this->action_time = 1;
        $RuntimeConfig = RuntimeConfig::findOne(['action' => 'UserAccountSyn']);
        if (empty($RuntimeConfig)) {
            $RuntimeConfig = new RuntimeConfig();
            $RuntimeConfig->attributes = [
                'model' => 'gp_account_log',
                'action' => 'user_account_syn',
                'last_time' => 0,
                'status' => RuntimeConfig::STATUS_VALID,
                'describe' => '同步用户账户信息'
            ];
            if ($RuntimeConfig->save() === false) {
                echo 'runtime error';
                var_dump($RuntimeConfig->getErrors());
                die;
            }
        }
        $this->action_time = $RuntimeConfig->last_time;
    }

    public function sqlExecute($sql)
    {
        return Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * 充值同步
     * UPDATE a SET    a = b.a,       b = b.b, FROM   t a,        t b WHERE  (a.条件1)        AND (b.条件2)
     * update a,（select * from a where month=2）as b set a.price=b.price where a.E_ID=b.E_ID and a.month=1
     * */
    public function ChargeSyn()
    {
        $action_type = AccountLog::ACTION_TYPE_CHARGE;
        $sql = "update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount,b.user_id 
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.action_type = $action_type 
              group by b.user_id 
            ) as U on U.user_id=a.user_id
        set a.charge_money=U.amount";
        return $this->sqlExecute($sql);
    }

    /**
     * 充值总金额
     * */
    public function WithdrawSyn()
    {
        $action_type = AccountLog::ACTION_TYPE_WITHDRAW;
        $sql = "update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount,b.user_id 
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.action_type = $action_type 
              group by b.user_id 
            ) as U on U.user_id=a.user_id
        set a.withdraw_money=U.amount";
        return $this->sqlExecute($sql);
    }

    /**
     * 过往投资的总金额
     * */
    public function gupiaoBuySyn()
    {
        $action_type = AccountLog::ACTION_TYPE_GUPIAO_BUY;
        $sql = "update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount,b.user_id  
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.action_type = $action_type 
              group by b.user_id 
            ) as U on U.user_id=a.user_id
        set a.invested_money=U.amount";
        return $this->sqlExecute($sql);
    }

    /**
     * 投资中的总金额***********
     * */
    public function gupiaoSoldSyn()
    {

    }

    /**
     * 投资收益金额
     * */
    public function incomeSyn()
    {
        $income_type = AccountLog::INCOME_TYPE_IN;
        $sql = "update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount,b.user_id  
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.income_type = $income_type 
              group by b.user_id 
            ) as U on U.user_id=a.user_id
        set a.income_money=U.amount";
        return $this->sqlExecute($sql);
    }

    /**
     * 支出花费金额
     * */
    public function feeSyn()
    {
        $income_type = AccountLog::INCOME_TYPE_OUT;
        $sql = "update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount,b.user_id  
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.income_type = $income_type 
              group by b.user_id 
            ) as U on U.user_id=a.user_id
        set a.fee_money=U.amount";
        return $this->sqlExecute($sql);
    }

    /**
     * 支出花费金额
     * */
    public function availableSyn()
    {
        $sql = "update gp_basic.gp_account_data as a 
            set a.available_money=a.charge_money+a.income_money-a.withdraw_money-a.investing_money
            where a.action_time > $this->action_time";
        return $this->sqlExecute($sql);
    }

}