<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'charge_money') ?>

    <?= $form->field($model, 'withdraw_money') ?>

    <?= $form->field($model, 'invested_money') ?>

    <?php // echo $form->field($model, 'investing_money') ?>

    <?php // echo $form->field($model, 'available_money') ?>

    <?php // echo $form->field($model, 'income_money') ?>

    <?php // echo $form->field($model, 'fee_money') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'update_int') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
