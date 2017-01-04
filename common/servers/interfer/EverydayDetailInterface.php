<?php
namespace common\servers\interfer;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use yii\base\Component;

abstract class EverydayDetailInterface extends Component{

    protected $httpOperator;
    public function init()
    {
        parent::init();
    }

    abstract function getUrl($data);
    abstract function getUrls($data);
    abstract function getCodes($data);
    abstract function isNeedDownload($data);
    abstract function isNeedUpdate($data);
    abstract function decode($data);
    abstract function update($data);
    
}


