<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\HolidayRaw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="holiday-raw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_str')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_int')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?=Html::label('Add days','addDays',['class'=>'control-label']) ?>
    <?=Html::input('text','HolidayRaw[addDays]',1,['class'=>'form-control','id'=>'addDays'])?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
