<?php
namespace frontend\controllers;

use frontend\models\RawHoliday;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Request;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class SiteController extends Controller
{
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHolidayList()
    {
        $dateFrom = Yii::$app->request->get('dateFrom', date('Y-m-d', strtotime('-1000 days')));
        $dateTo = Yii::$app->request->get('dateTo', date('Y-m-d', strtotime('100 days')));
        if (strlen($dateFrom) == 10) {
            $timeFrom = strtotime($dateFrom);
            $timeTo = strtotime($dateTo);
            $where = ['between', 'date_int', $timeFrom, $timeTo];
        } else {
            if (strlen($dateFrom) > 0) {
                $where = [" date_str like %$dateFrom% "];
            } else {
                $where = [" 1 "];
            }
        }
        $num = RawHoliday::find()->where($where)->count();
        $pagination = new Pagination(['totalCount' => $num]);
        $lists = RawHoliday::find()->where($where)->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('RawHoliday', ['dateFrom' => $dateFrom, 'dateTo' => $dateTo, 'lists' => $lists, 'pagination' => $pagination, 'days' => 1]);
    }

    public function actionHolidayAdd()
    {

        $dateFrom = Yii::$app->request->get('dateFrom');
        $dateTo = Yii::$app->request->get('dateTo', date('Y-m-d', strtotime('100 days')));
        $days = Yii::$app->request->get('days', 1);
        $type = Yii::$app->request->get('type');
        if (strlen($dateFrom) == 10) {
            $timeFrom = strtotime($dateFrom);
            $RawHoliday = RawHoliday::find();
            $addNum = 0;
            $tableDb = Yii::$app->getDb()->createCommand();
            for ($i = 0; $i < (int)$days; $i++) {
                $time = $timeFrom + 3600 * 24 * $i + 600;
                $isHave = $RawHoliday->where(['date_str' => date('Y-m-d', $time)])->one();
                if (!$isHave) {
                    $result = $tableDb->insert(RawHoliday::tableName(), ['date_str' => date('Y-m-d', $time), 'date_int' => $time, 'type' => $type])->execute();
                    if ($result !== false) {
                        $addNum++;
                    }
                }

            }
        } else {
            echo '日期不正确';
            die;
        }
        if (strlen($dateFrom) == 10) {
            $timeFrom = strtotime($dateFrom);
            $timeTo = strtotime($dateTo);
            $where = ['between', 'date_int', $timeFrom, $timeTo];
        } else {
            if (strlen($dateFrom) > 0) {
                $where = [" date_str like %$dateFrom% "];
            } else {
                $where = [" 1 "];
            }
        }
        $num = RawHoliday::find()->where($where)->count();
        $pagination = new Pagination(['totalCount' => $num]);
        $lists = RawHoliday::find()->where($where)->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('RawHoliday', ['dateFrom' => $dateFrom, 'lists' => [], 'pagination' => '', 'type' => $type, 'days' => $days, 'lists' => $lists, 'pagination' => $pagination]);
    }

    public function actionHolidayEdit()
    {
        $dateFrom = Yii::$app->request->get('dateFrom');
        $dateTo = Yii::$app->request->get('dateTo', date('Y-m-d', strtotime('100 days')));
        $days = Yii::$app->request->get('days', 1);
        $type = Yii::$app->request->get('type');
        $timeFrom = strtotime($dateFrom);
            $RawHoliday = RawHoliday::findOne(['id' => $days]);
            if ($RawHoliday) {
                $RawHoliday->attributes = ['date_str' => date('Y-m-d', $timeFrom), 'date_int' => $timeFrom,'type'=>$type];
                $result = $RawHoliday->save();
                if ($result === false) {
                    var_dump($RawHoliday->getErrors());
                }
            } else {
                echo '没有发现所要更新的目标';
                die;
            }
        if (strlen($dateFrom) == 10) {
            $timeFrom = strtotime($dateFrom);
            $timeTo = strtotime($dateTo);
            $where = ['between', 'date_int', $timeFrom, $timeTo];
        } else {
            if (strlen($dateFrom) > 0) {
                $where = [" date_str like %$dateFrom% "];
            } else {
                $where = [" 1 "];
            }
        }
        $num = RawHoliday::find()->where($where)->count();
        $pagination = new Pagination(['totalCount' => $num]);
        $lists = RawHoliday::find()->where($where)->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('RawHoliday', ['dateFrom' => $dateFrom, 'lists' => [], 'pagination' => '', 'dateTo' => $dateTo, 'days' => $days, 'lists' => $lists, 'pagination' => $pagination,]);
    }

    public function actionHolidayDel()
    {
        $days = Yii::$app->request->get('days', 1);

        $RawHoliday = RawHoliday::findOne(['id' => $days]);
        if ($RawHoliday) {
            $RawHoliday->delete();
        }
        $this->redirect('/site/holiday-list');
    }

    public function actionHolidayList1()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => RawHoliday::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 数据提供者中所含数据所定义的简单的列
                // 使用的是模型的列的数据
//                [
//                    'class' => 'yii\grid\ActionColumn',
//                    'template' => '{view} {update} {delete}',
//                    'buttons' => [
//                        'view' => function ($url, $model, $key) {
//                            return Html::a(Html::tag('span', '', ['class' => "glyphicon fa fa-eye"]), ['admin/view-app', 'id'=>$model->id], ['class' => "btn btn-xs btn-success", 'title' => '查看']);
//                        },
//                        'update' => function ($url, $model, $key) {
//                            return Html::a('通过', ['admin/reviewapp','id'=>$model->id, 'status'=>1], ['class' => "btn btn-xs btn-info"]);                    },
//                        'delete' => function ($url, $model, $key) {
//                            return Html::a('拒绝', ['admin/reviewapp', 'id' => $model->id, 'status'=>0], ['class' => "btn btn-xs btn-danger"]);
//                        }
//                    ]
//                ],
                'date_str',
                // 更复杂的列数据
                [
                    'class' => 'yii\grid\DataColumn', //由于是默认类型，可以省略
                    'value' => function ($data) {
                        return $data->type; // 如果是数组数据则为 $data['name'] ，例如，使用 SqlDataProvider 的情形。
                    },
                    'header' => 'stringXXXX'
                ],
                ['class' => 'yii\grid\ActionColumn', 'header' => '操作',],
            ],
        ]);
        die;
        $dateFrom = Yii::$app->request->get('dateFrom', '2000-01-01');
        $dateTo = Yii::$app->request->get('dateTo', date('Y-m-d'));
        if (strlen($dateFrom) == 10) {
            $timeFrom = strtotime($dateFrom);
            $timeTo = strtotime($dateTo);
            $where = ['between', 'date_int', $timeFrom, $timeTo];
        } else {
            $where = [" date_str like %$dateFrom% "];
        }
        $num = RawHoliday::find()->where($where)->count();
        $pagination = new Pagination(['totalCount' => $num]);
        $lists = RawHoliday::find()->where($where)->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('RawHoliday', ['dateFrom' => $dateFrom, 'dateTo' => $dateTo, 'lists' => $lists, 'pagination' => $pagination, 'days' => 1]);


    }


}
