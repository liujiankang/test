<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\RuntimeConfig */

$this->title = 'Update Runtime Config: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Runtime Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="runtime-config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
