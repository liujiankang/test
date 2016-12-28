<?php
namespace common\servers\interfer;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */

interface EverydayDetail{

    //得到需要更新的code
    public function getCodes();
    public function getContent();
    public function getMultContent();
}


