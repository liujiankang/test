<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\user\AccountDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Account Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Account Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'charge_money',
            'withdraw_money',
            'invested_money',
             'investing_money',
             'available_money',
             'income_money',
             'fee_money',
            // 'status',
            // 'update_int',
            // 'update_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
