<?php
return [
    'bootstrap' => ['debug'],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'log'=>[
            'class' => 'yii\log\Dispatcher',
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    //'levels' => ['error','warning','info','trace','profile'],
                    //'categories' => ['yii\db\*'],
                    //'exportInterval' => 1,
                    //'logFile' => '@app/runtime/logs/warning.log',
                ],
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'logTable'=> 'yii_log',
                ]
            ],
        ],
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1','192.168.3.*'],
            'historySize'=>500
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1','192.168.3.*'],
        ]
    ],
    'timeZone'=>'Asia/Chongqing',
];
