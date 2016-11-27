<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\user\ChargeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Charges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="charge-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
            <?= Html::a('Create Charge', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'uid',
            'amount',
            'date_str',
            'date_int',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
