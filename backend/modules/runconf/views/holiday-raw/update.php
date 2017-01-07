<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\HolidayRaw */

$this->title = 'Update Holiday Raw: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Holiday Raws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="holiday-raw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
