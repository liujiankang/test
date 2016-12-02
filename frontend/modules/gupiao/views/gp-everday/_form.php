<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoEveryday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gupiao-everyday-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'date_str')->textInput() ?>

    <?= $form->field($model, 'gp_id')->textInput() ?>

    <?= $form->field($model, 'open_price')->textInput() ?>

    <?= $form->field($model, 'close_price')->textInput() ?>

    <?= $form->field($model, 'low_price')->textInput() ?>

    <?= $form->field($model, 'high_price')->textInput() ?>

    <?= $form->field($model, 'last_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tunover_persent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deal_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deal_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'all_market_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'liutong_market_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shake_persent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shake_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_start_id')->textInput() ?>

    <?= $form->field($model, 'detail_end_id')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
