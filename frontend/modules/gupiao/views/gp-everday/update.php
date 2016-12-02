<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoEveryday */

$this->title = 'Update Gupiao Everyday: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Everydays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gupiao-everyday-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
