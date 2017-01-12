<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\HolidayReal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="holiday-real-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_str')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_int')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'is_downed')->textInput() ?>
    
    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
