<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

\frontend\assets\AppAsset::register($this);
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <?= Html::beginForm('holiday-list', 'get') ?>
    <?= Html::textInput('dateFrom', isset($dateFrom) ? $dateFrom : '2015-01-01') ?>
    <?= Html::textInput('dateTo', isset($dateTo) ? $dateTo : date('Y-m-d', strtotime('100 days'))) ?>
    <?= Html::submitButton('search') ?>
    <?= Html::endForm() ?>

    <?= Html::beginForm('holiday-add', 'get',['id'=>'addHolidayFrom']) ?>
    <?= Html::textInput('dateFrom', isset($dateFrom) ? $dateFrom : '2015-01-01') ?>
    <?= Html::textInput('days', isset($days) ? $days : 2) ?>
    <?= Html::textInput('type', isset($type) ? $type : '') ?>
    <?= Html::submitButton('add') ?> <?= Html::button('edit') ?> <?= Html::button('del') ?>
    <?= Html::endForm() ?>
    <table class="table">
        <tr>
            <th>id</th>
            <th>日期</th>
            <th>时间戳</th>
            <th>星期</th>
            <th>其他</th>
        </tr>
        <?php
        foreach ($lists as $list) {
            echo '<tr>';
            if (!empty($list)) {
                $workDay = in_array(date('w', $list['date_int']), [1, 2, 3, 4, 5]) ? date('w', $list['date_int']) : ' ';
                echo "<td>$list[id]</td>"
                    . "<td>$list[date_str]</td>"
                    . "<td>$list[date_int]</td>"
                    . "<td>" . $workDay . "</td>"
                    . "<td>$list[type]</td>";
            }
            echo '</tr>';
        }
        ?>

    </table>
    <?php if(isset($pagination)){ echo LinkPager::widget(['pagination' => $pagination ]); }?>
</div>
<script>
    $(':button').on('click',function (e) {
        alert($(this).val());
    })
</script>
