<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\servers\user\UserAccount;
use common\servers\sina\GpEverydayDealDetails;

/**
 * Site controller
 */
class TestController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $arr = [1, 2, 3, 4, 6, 7];
        echo __CLASS__;
        echo __METHOD__;
        echo __NAMESPACE__;
        do {


            foreach ($arr as $key => $value) {
                if (rand(1, 3) > 1) {
                    unset($arr[$key]);
                }
                var_dump($arr);
            }
        } while (count($arr) > 1);
    }
}
