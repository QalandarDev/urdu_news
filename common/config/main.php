<?php


return [
    'language' => 'uz_UZ',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'telegram' => [
            'class' => aki\telegram\Telegram::class,
            'botToken' => '5468051893:AAGJijlBAOsxWCIruktpBmES1NKdHmlaeRI',
        ]
    ],
];
