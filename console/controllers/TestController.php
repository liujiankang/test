<?php
namespace console\controllers;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
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
//        $key=md5(__METHOD__);
//        $isHave=Yii::$app->cache->get($key);
//        if(!$isHave || $isHave<time()-5){
//            Yii::$app->cache->set($key,time(),10);
//            for($i=0;$i<20;$i++){
//                echo 'sleep 10s'.Yii::$app->cache->get($key).PHP_EOL;
//                sleep(1);
//                if($i<7){
//                    Yii::$app->cache->set($key,time(),10);
//                }
//            }
//            echo ' for loop done '.Yii::$app->cache->get($key).PHP_EOL;
//        }else{
//            echo ' already have'.PHP_EOL;
//        }
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




