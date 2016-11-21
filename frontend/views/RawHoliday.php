<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RawHoliday */
/* @var $form ActiveForm */
?>
<div class="RawHoliday">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'date_int') ?>
        <?= $form->field($model, 'update_at') ?>
        <?= $form->field($model, 'create_at') ?>
        <?= $form->field($model, 'date_string') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- RawHoliday -->
