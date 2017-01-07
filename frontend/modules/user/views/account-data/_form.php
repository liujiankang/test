<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'charge_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withdraw_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invested_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'investing_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'update_int')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
