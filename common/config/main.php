<?php
return [
    'bootstrap' => ['log', 'debug'],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            //'class' => 'yii\caching\FileCache',
            'class' => 'yii\redis\Cache',
//            'redis' => ['hostname' => 'localhost','port' => 6379,'database' => 0,],
        ],
        'session' => [
            'class' => 'yii\redis\Session',
//            'redis' => ['hostname' => 'localhost','port' => 6379,'database' => 0,],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'log' => [
            'class' => 'yii\log\Dispatcher',
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'error' => [
                    //'levels' => ['error','warning','info','trace','profile'],
                    //'categories' => ['yii\db\*'],
                    //'exportInterval' => 1, //DIRECTORY_SEPARATOR
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/logError' . date('Ymd') . '.log',
                    //logVars = ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_SERVER']
                ],
//                'info' => [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['info', 'trace'],
//                    'logFile' => '@app/runtime/logs/logInfo' . date('Ymd') . '.log',
//                ],
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'logTable' => 'yii_log',
                ]
            ],
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.3.*'],
            'historySize' => 500,
            'dataPath' => '@common/runtime/debug',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.3.*'],
        ]
    ],
    'timeZone' => 'Asia/Chongqing',
];
