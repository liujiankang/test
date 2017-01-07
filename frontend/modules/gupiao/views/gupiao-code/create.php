<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\gupiao\GupiaoCode */

$this->title = 'Create Gupiao Code';
$this->params['breadcrumbs'][] = ['label' => 'Gupiao Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gupiao-code-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
