<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id'            => 'basic',
    'basePath'      => dirname(__DIR__),
    'bootstrap'     => ['log'],
    'language'      => 'ru',
    'aliases'       => [
        '@web'    => __DIR__ . '/public_html/',
        '@csRoot' => __DIR__ . '/../app',
    ],
    'components'    => [
        'request'              => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey'    => '',
            'enableCookieValidation' => false,
            'enableCsrfValidation'   => false,
        ],
        'cache'                => [
            'class' => 'yii\caching\FileCache',
        ],
        'devicedetect'         => [
            'class' => 'alexandernst\devicedetect\DeviceDetect',
        ],
        'user'                 => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl'        => ['auth/login'],
        ],
        'errorHandler'         => [
            'errorAction' => 'error/error',
        ],
        'urlManager'           => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => true,
            'suffix'              => '',
            'rules'               => require(__DIR__ . '/urlRules.php'),
        ],
        'mailer'               => [
            'class'            => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport'        => require(__DIR__ . '/mailerTransport.php'),
        ],
        'log'                  => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => [
                        'error',
                        'warning'
                    ],
                ],
                [
                    'class' => 'yii\log\DbTarget',
                ],
            ],
        ],
        'db'                   => require(__DIR__ . '/db.php'),
        'authClientCollection' => [
            'class'   => 'yii\authclient\Collection',
            'clients' => require(__DIR__ . '/authClientCollection.php'),
        ],
        'formatter'            => [
            'dateFormat'        => 'dd.MM.yyyy',
            'timeFormat'        => 'H:i:s',
            'datetimeFormat'    => 'php:d.m.Y H:i',
            'decimalSeparator'  => '.',
            'thousandSeparator' => ' ',
            'currencyCode'      => 'RUB',
            'locale'            => 'ru-RU',
            'nullDisplay'       => '',
        ],
        'view'                 => [
            'renderers' => [
                'tpl' => [
                    'class'     => 'yii\smarty\ViewRenderer',
                    'cachePath' => '@runtime/Smarty/cache',
                    'widgets'   => [
                        'blocks' => [
                            'ActiveForm' => 'yii\widgets\ActiveForm',
                        ],
                    ],
                ],
            ],
        ],

    ],
    'params'        => $params,
    'controllerMap' => [
        'upload'  => 'cs\Widget\FileUploadMany\UploadController',
        'comment' => 'app\modules\Comment\Controller',
    ],
    'on beforeRequest' => function($event) {
        //\cs\Application::checkForIp();
    }
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
