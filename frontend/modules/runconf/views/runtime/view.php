<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\RuntimeConfig */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Runtime Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runtime-config-view">

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
            'model',
            'action',
            'last_time:datetime',
            'describe',
        ],
    ]) ?>

</div>
