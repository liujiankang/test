<?php
return [
    'bootstrap' => ['log','debug'],
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
                'error' => [
                    //'levels' => ['error','warning','info','trace','profile'],
                    //'categories' => ['yii\db\*'],
                    //'exportInterval' => 1, //DIRECTORY_SEPARATOR
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/logError'. date('Ymd').'.log',
                ],
                'info' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info','trace'],
                    'logFile' => '@app/runtime/logs/logInfo'. date('Ymd').'.log',
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
            'historySize'=>500,
            'dataPath'=>'@common/runtime/debug',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1','192.168.3.*'],
        ]
    ],
    'timeZone'=>'Asia/Chongqing',
];
