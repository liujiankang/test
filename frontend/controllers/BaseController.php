<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * Site controller
 */
class BaseController extends Controller
{
    public $dbBasic;
    public $dbDaily;
    public function init()
    {
        parent::init();
        $this->dbBasic=Yii::$app->db;
        $this->dbDaily=Yii::$app->dbDaily;
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

}
