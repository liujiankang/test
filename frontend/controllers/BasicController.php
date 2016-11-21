<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class BasicController extends Controller
{
    public $dbBasic;
    public $dbDaily;
    public function init()
    {
        parent::init();
        //$this->dbBasic=Yii::$app->getDb();
        //$this->dbDaily=Yii::$app->getDb('dbDaily');
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
