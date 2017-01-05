<?php
namespace console\controllers;
use yii\console\Controller;

class BaseController extends Controller{
    
    public function getLoggerAction(){
        $namespace=__NAMESPACE__;
        $action=$this->getRoute();
        return str_replace('\\','/',$namespace.'/'.$action);
    }
}