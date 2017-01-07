<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\system\YiiLog */

$this->title = 'Update Yii Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yii Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
