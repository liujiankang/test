<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\user\AccountLog;

/* @var $this yii\web\View */
/* @var $model frontend\models\user\AccountLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_type')->dropDownList(AccountLog::$action_type_map) ?>

    <?= $form->field($model, 'income_type')->dropDownList(AccountLog::$income_type_map) ?>

    <?= $form->field($model, 'action_time')->textInput() ?>

    <?= $form->field($model, 'date_str')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
