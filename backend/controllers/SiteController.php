<?php
namespace backend\controllers;

use Yii;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
