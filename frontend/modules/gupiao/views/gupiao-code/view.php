<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoCode */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-code-view">

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
            'code',
            'type',
            'status',
            'date_str',
            'date_int',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
