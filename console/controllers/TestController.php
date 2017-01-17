<?php
namespace console\controllers;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
use common\servers\tencent\GpEverydayDealDetails;
use Faker\Provider\UserAgent;
use common\lib\http\WgetTransfer;
use common\servers\sina\GpEverydayDealDetails as sinaED;
use common\servers\wangyi\GpEverydayDealDetails as wangyiED;
use common\servers\tencent\GpEverydayDetails as qqED;
use Yii;

class TestController extends \yii\console\Controller
{
    public function actionIndex(){
        echo UserAgent::userAgent();
        (new GpEverydayDealDetails())->actionOneSyn();
    }
    public function actionRunsina()
    {
        $wget=new sinaED();
        $result=$wget->actionRun();
        var_dump($result);
        print 'done';
    }
    public function actionRunwangyi()
    {
        $wget=new wangyiED();
        $result=$wget->actionRun();
        var_dump($result);
        print 'done';
    }


    public function actionRunqqOne()
    {
        $wget=new qqED();
        //$result=$wget->actionAllSyn();
        $result=$wget->actionOneSyn();
        var_dump($result);
        print 'done';
    }

    public function actionRunqq()
    {
        $wget=new qqED();
        $result=$wget->actionAllSyn();
        //$result=$wget->actionOneSyn();
        var_dump($result);
        print 'done';
    }
}




