<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\gupiao\GpEverdaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gupiao Everydays';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-everyday-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gupiao Everyday', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_str',
            'gp_id',
            'open_price',
            'close_price',
            // 'low_price',
            // 'high_price',
            // 'last_price',
            // 'tunover_persent',
            // 'deal_number',
            // 'deal_money',
            // 'all_market_value',
            // 'liutong_market_value',
            // 'shake_persent',
            // 'shake_value',
            // 'detail_start_id',
            // 'detail_end_id',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
