<?php
/**
 * 账户中心同步功能.
 * User: Administrator
 * Date: 2016/12/11
 * Time: 23:05
 */
namespace console\controllers;
use console\controllers\BaseController;
use common\servers\user\UserAccount;

class UserAccountController extends BaseController
{
    public function actionRun(){
        $UserAccount=new UserAccount();
        $UserAccount->ChargeSyn();
    }
}