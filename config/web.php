<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'EMiUsjn0P2FPW37GNZxUhrG5L0R-fy-k',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\NewUser',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

         'awssdk' => [
            'class' => 'fedemotta\awssdk\AwsSdk',
            'credentials' => [
                //you can use a different method to grant access
                'key' => 'AKIAJDDL2P5J7GXU5NZQ',
                'secret' => '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',
            ],
            'region' => 'ap-southeast-1', //i.e.: 'us-east-1'
            'version' => 'latest', //i.e.: 'latest'
        ],
        's3' => [
            'class' => 'frostealth\yii2\aws\s3\Service',
            'credentials' => [ // Aws\Credentials\CredentialsInterface|array|callable
                'key' => 'AKIAJDDL2P5J7GXU5NZQ',
                'secret' => '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',
            ],
            'region' => 'ap-southeast-1',
            'defaultBucket' => 'ramo-statics',
            'defaultAcl' => 'public-read',
        ],
        
        'db' => $db,
        // 'urlManager' => [
        //     'enablePrettyUrl' => true,
        //     'showScriptName' => false,
        //     'rules' => [
        //     ],
        // ],
        'awssdk' => [
            'class' => 'fedemotta\awssdk\AwsSdk',
            'credentials' => [
                //you can use a different method to grant access
                'key' => 'AKIAJDDL2P5J7GXU5NZQ',
                'secret' => '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',
            ],
            'region' => 'ap-southeast-1', //i.e.: 'us-east-1'
            'version' => 'latest', //i.e.: 'latest'
        ],
        's3' => [
            'class' => 'frostealth\yii2\aws\s3\Service',
            'credentials' => [ // Aws\Credentials\CredentialsInterface|array|callable
                'key' => 'AKIAJDDL2P5J7GXU5NZQ',
                'secret' => '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',
            ],
            'region' => 'ap-southeast-1',
            'defaultBucket' => 'ramo-statics',
            'defaultAcl' => 'public-read',
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
