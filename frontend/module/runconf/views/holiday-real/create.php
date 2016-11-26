<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\HolidayReal */

$this->title = 'Create Holiday Real';
$this->params['breadcrumbs'][] = ['label' => 'Holiday Reals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="holiday-real-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
