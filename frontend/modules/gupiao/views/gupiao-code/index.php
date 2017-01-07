<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\gupiao\GupiaoCodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gupiao Codes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-code-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gupiao Code', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'type',
            'status',
            'name',
            'date_str',
            // 'date_int',
            // 'create_at',
            // 'update_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
