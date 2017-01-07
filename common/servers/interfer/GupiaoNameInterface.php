<?php
namespace common\servers\interfer;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use common\lib\http\PhpTransfer;

class GupiaoNameSynchro{

    protected $httpOperator;
    public function __construct(){
        $this->httpOperator=new PhpTransfer();
    }
    public function getContent(){
        $content=$this->httpOperator->getContent();
        var_dump($content);
    }
}


