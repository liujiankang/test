<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\runconf\RuntimeConfig */

$this->title = 'Create Runtime Config';
$this->params['breadcrumbs'][] = ['label' => 'Runtime Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runtime-config-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
