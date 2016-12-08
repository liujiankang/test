<?php

/* @var $this yii\web\View */
use \yii\helpers\Html;
$this->title = 'My Gupiao Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>gupiao try!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?=Html::a('股票节假日','/runconf/holiday-raw',['class'=>'btn btn-success'])?>
                <?=Html::a('股票交易日','/runconf/holiday-real',['class'=>'btn btn-success'])?>
                <?=Html::a('运行配置','/runconf/runtime',['class'=>'btn btn-danger'])?>
                <?=Html::a('更新假期','/runinit/index/holiday-raw-ljk',['class'=>'btn btn-danger'])?>
                <?=Html::a('更新交易日','/runinit/index/holiday-real-ljk',['class'=>'btn btn-danger'])?>
                <?=Html::a('从file更新每天交易简介','/runinit/index/gupiao-history-everyday?byFile=true',['class'=>'btn btn-warning'])?>
                <?=Html::a('从url更新每天交易简介','/runinit/index/gupiao-history-everyday',['class'=>'btn btn-warning'])?>
                <?=Html::a('同花顺每天开盘价格更新','/runinit/index/gupiao-everyday-open-close-ths',['class'=>'btn btn-warning'])?>
                <?=Html::a('eastmoney每天开盘价格更新','/runinit/index/gupiao-everyday-open-close',['class'=>'btn btn-warning'])?>
                <?=Html::a('163每天开盘价格更新','/runinit/index/gupiao-everyday-open-close-wangyi',['class'=>'btn btn-warning'])?>
            </div>
            <div class="col-lg-4">
                <?=Html::a('股票代码','/gupiao/gupiao-code',['class'=>'btn btn-success'])?>
                <?=Html::a('股票每天交易简介','/gupiao/gp-everyday',['class'=>'btn btn-success'])?>
                <?=Html::a('充值提现流水账','/user/account-log',['class'=>'btn btn-success'])?>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
            </div>
        </div>

    </div>
</div>
