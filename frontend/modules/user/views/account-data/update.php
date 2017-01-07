<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountData */

$this->title = 'Update Account Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Account Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
