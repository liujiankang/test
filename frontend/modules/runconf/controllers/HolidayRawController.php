<?php

namespace frontend\modules\runconf\controllers;

use Yii;
use frontend\models\runconf\HolidayRaw;
use frontend\controllers\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HolidayRawController implements the CRUD actions for HolidayRaw model.
 */
class HolidayRawController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HolidayRaw models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HolidayRaw();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HolidayRaw model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HolidayRaw model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HolidayRaw();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $post = Yii::$app->request->post('HolidayRaw');
            if (isset($post['addDays']) &&$post['addDays']>1) {
                $addDays =$post['addDays'];
                $date_str=$post['date_str'];
                $date_int=$post['date_int'];
                $type=$post['type'];
                if(strtotime($date_str)>1){
                    $date_int=strtotime($date_str);
                }
                if($date_int<10){
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                $data=[];
                for ($i = 1; $i < $addDays; $i++) {
                   $tempInt=$date_int+$i*86400;
                    $data[]=[date('Y-m-d',$tempInt),$tempInt,$type];
                }
                    HolidayRaw::find()
                        ->createCommand()
                        ->batchInsert(HolidayRaw::tableName(),['date_str','date_int','type'],$data)
                        ->execute();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HolidayRaw model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HolidayRaw model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HolidayRaw model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HolidayRaw the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HolidayRaw::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
