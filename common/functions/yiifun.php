<?php
function getRequest(){
    return Yii::$app->request;
}

function getResponse(){
    return Yii::$app->response;
}

function getDb(){
    return Yii::$app->db;
}

function getLog(){
    return Yii::$app->log;
}

function yiiTrace($info,$controller){
    Yii::trace($info,$controller);
}

