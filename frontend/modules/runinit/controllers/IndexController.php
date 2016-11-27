<?php

namespace frontend\modules\runinit\controllers;

use common\servers\HolidayRawUpdate;
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
    public function actionHolidayReal()
    {
        echo 'holiday init';
        (new HolidayRealInit())->actionRun();
        echo 'holiday init done';
        return $this->render('@app/modules/runinit/views/default/index');
    }

    public function actionHolidayRaw()
    {
        echo 'holiday Raw update';
        (new HolidayRawUpdate())->actionRun();
        echo 'holiday Raw update done';
        return $this->render('@app/modules/runinit/views/default/index');
    }
    //初始化数据库表
    //初始化数据
}
