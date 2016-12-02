<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GpEverdaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gupiao-everyday-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_str') ?>

    <?= $form->field($model, 'gp_id') ?>

    <?= $form->field($model, 'open_price') ?>

    <?= $form->field($model, 'close_price') ?>

    <?php // echo $form->field($model, 'low_price') ?>

    <?php // echo $form->field($model, 'high_price') ?>

    <?php // echo $form->field($model, 'last_price') ?>

    <?php // echo $form->field($model, 'tunover_persent') ?>

    <?php // echo $form->field($model, 'deal_number') ?>

    <?php // echo $form->field($model, 'deal_money') ?>

    <?php // echo $form->field($model, 'all_market_value') ?>

    <?php // echo $form->field($model, 'liutong_market_value') ?>

    <?php // echo $form->field($model, 'shake_persent') ?>

    <?php // echo $form->field($model, 'shake_value') ?>

    <?php // echo $form->field($model, 'detail_start_id') ?>

    <?php // echo $form->field($model, 'detail_end_id') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
