<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoEveryday */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Everydays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-everyday-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_str',
            'gp_id',
            'open_price',
            'close_price',
            'low_price',
            'high_price',
            'last_price',
            'tunover_persent',
            'deal_number',
            'deal_money',
            'all_market_value',
            'liutong_market_value',
            'shake_persent',
            'shake_value',
            'detail_start_id',
            'detail_end_id',
            'updated_at',
        ],
    ]) ?>

</div>
