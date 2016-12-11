<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\user\AccountLog;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\user\AccountLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $maxId 1 */

$this->title = 'Account Logs';
$this->params['breadcrumbs'][] = $this->title;
$maxId = 3;
?>
<div class="account-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Account Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'amount',
            [
                'label' => '操作类型',
                'attribute' => 'action_type',
                'filter' => AccountLog::$action_type_map,
                'value' => function ($model, $key, $index, $grid) {
                    return AccountLog::$action_type_map[$model->action_type];
                }
            ],
            //'action_type:text:操作类型',
            [
                'label' => '收支类型',
                'attribute' => 'income_type',
                'filter' => AccountLog::$income_type_map,
                //'content' => function ($model, $key, $index, $grid) {},
                'value' => function ($model, $key, $index, $grid) {
                    return AccountLog::$income_type_map[$model->income_type];
                }
            ],
            // 'action_time:datetime',
            // 'date_str',
            // 'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                'visibleButtons' => ['update' => function ($model) {
                    return AccountLog::isEditable($model->id, $model->user_id);
                }]
            ],
        ],
    ]); ?>
</div>
