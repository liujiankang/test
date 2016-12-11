<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountData */

$this->title = 'Create Account Data';
$this->params['breadcrumbs'][] = ['label' => 'Account Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
