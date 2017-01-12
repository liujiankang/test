<?php
namespace console\controllers;

/**
 * 定时删除重复的日志信息
 * User: Administrator
 * Date: 2016/11/16
 * Time: 21:51
 */
use Yii;
use yii\helpers\FileHelper;

class UnlinkLogController extends BaseController
{
    public function actionUnShellLog()
    {
        $files = FileHelper::findFiles('/home/wang/webdev/shell/log/');
        $hashFiles = [];
        foreach ($files as $file) {
            $hash = hash_file('md5', $file);
            if (in_array($hash, $hashFiles)) {
                unlink($file);
            } else {
                array_push($hashFiles, $hash);
            }

        }
        echo 'done';
    }

}




