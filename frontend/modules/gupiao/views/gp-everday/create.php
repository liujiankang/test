<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoEveryday */

$this->title = 'Create Gupiao Everyday';
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Everydays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-everyday-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
