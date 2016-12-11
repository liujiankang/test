<?php
namespace common\servers\user;
use common\models\user\AccountLog;
use common\servers\BaseService;
class UserAccount extends BaseService{

    public $accountTable;
    public $accountLogTable;
    public $action_time;
    public function init()
    {
        parent::init();
    }

    /**
     * 充值同步
     * UPDATE a SET    a = b.a,       b = b.b, FROM   t a,        t b WHERE  (a.条件1)        AND (b.条件2)
     * update a,（select * from a where month=2）as b set a.price=b.price where a.E_ID=b.E_ID and a.month=1
     * */
    public function ChargeSyn(){
        $action_type_charge=AccountLog::ACTION_TYPE_CHARGE;
        echo $sql="update $this->accountTable as a 
            inner join (
              select sum(b.amount) as amount  
              from $this->accountLogTable as b 
              INNER join (
                SELECT user_id 
                from $this->accountLogTable
                where action_time > $this->action_time
                GROUP BY user_id 
              ) as c on c.user_id=b.user_id 
              where b.action_type = $action_type_charge 
              group by user_id 
            ) as U on U.user_id=a.user_id
        set a.charge_money=U.amount";
    }
}