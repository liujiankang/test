<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountLog */

$this->title = 'Create Account Log';
$this->params['breadcrumbs'][] = ['label' => 'Account Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
