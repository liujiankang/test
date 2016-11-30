<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoCode */

$this->title = 'Update Gupiao Code: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gupiao-code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
