<?php

namespace frontend\modules\runinit\controllers;

use yii\web\Controller;
use common\servers\HolidayRealInit;
/**
 * Default controller for the `runinit` module
 */
class IndexController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo 'holiday init';
        (new HolidayRealInit())->actionRun();
        echo 'holiday init done';
    }
    //初始化数据库表
    //初始化数据
}
