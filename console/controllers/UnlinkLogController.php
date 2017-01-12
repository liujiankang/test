<?php
namespace console\controllers;

/**
 * 定时任务得到每一天的股票买卖详情数据
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
use Yii;
use common\servers\confinit\HolidayRealInit;

class InitController extends BaseController
{
    public function actionRun()
    {
        //填充股票交易日
        $this->fillGupiaoDay();
    }

    private function fillGupiaoDay()
    {
        echo 'holiday init began';
        if ((new HolidayRealInit())->actionRun()) {
            echo 'holiday init done';
        } else {
            echo 'holiday init fail';
        };
    }
}




