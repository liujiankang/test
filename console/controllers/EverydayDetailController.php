<?php
namespace console\controllers;

/**
 * 定时任务得到每一天的股票买卖详情数据
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
use common\lib\http\WgetTransfer;
use common\servers\sina\GpEverydayDealDetails as sinaED;
use common\servers\wangyi\GpEverydayDealDetails as wangyiED;
use common\servers\tencent\GpEverydayDealDetails as qqED;
use Yii;

class EverydayDetailController extends BaseController
{
    public function actionIndex(){
        Yii::info('test',$this->getLoggerAction());
    }
    public function actionRunsina()
    {
        $wget=new sinaED();
        $result=$wget->actionRun();
        Yii::info($result,'console\EverydayDetail\sina');
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


    public function actionRunqq()
    {
        $wget=new qqED();
        $result=$wget->actionRun();
        var_dump($result);
        print 'done';
    }
}




