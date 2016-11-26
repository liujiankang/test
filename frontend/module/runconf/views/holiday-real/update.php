<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\HolidayReal */

$this->title = 'Update Holiday Real: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Holiday Reals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="holiday-real-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
