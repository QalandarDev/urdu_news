<?php

use common\models\User;
use daxslab\taggedview\View;
use hsoft\translatemanager\Module;
use hsoft\translatemanager\services\scanners\ScannerDatabase;
use hsoft\translatemanager\services\scanners\ScannerJavaScriptFunction;
use hsoft\translatemanager\services\scanners\ScannerPhpArray;
use hsoft\translatemanager\services\scanners\ScannerPhpFunction;
use yii\log\FileTarget;
use codemix\localeurls\UrlManager;
use yii\i18n\DbMessageSource;
use frontend\models\News;
use lan143\yii2_yandexturbo\YandexTurbo;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'UrDU News',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'translatemanager'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'uz',
    'homeUrl' => '/',
    'components' => [
        'view' => [
            'class' => View::class,
            'generator' => 'UrDU News',
            'site' => 'https://urdu.uz',
            'author' => 'QalandarDev',
        ],
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            "baseUrl" => "",
        ],
        'user' => [
            'identityClass' => User::class,
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_user', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'class' => UrlManager::class,
            'languages' => ['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/routes.php',
            'ignoreLanguageUrlPatterns' => [
                '#^yandex#' => '#^yandex#',
            ],
        ],
        'i18n' => [
            'translations' => [
                'news' => [
                    'class' => DbMessageSource::class,
                    'db' => 'db',
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                    'enableCaching' => true,
                    'cachingDuration' => 1
                ],
                '*' => [
                    'class' => DbMessageSource::class,
                    'db' => 'db',
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                    'enableCaching' => true,
                    'cachingDuration' => 1
                ],

            ],
        ],

    ],
    'params' => $params,
    'modules' => [
        'translatemanager' => [
            'class' => Module::class,
            'root' => '@app',               // The root directory of the project scan.
            'scanRootParentDirectory' => true, // Whether scan the defined `root` parent directory, or the folder itself.
            'allowedIPs' => ['*'],  // IP addresses from which the translation interface is accessible.
            'roles' => ['?'],               // For setting access levels to the translating interface.
            'tmpDir' => '@runtime',         // Writable directory for the client-side temporary language files.
            'phpTranslators' => ['::t'],    // list of the php function for translating messages.
            'patterns' => ['*.php'],// list of file extensions that contain language elements.
            'onlyCategories' => ['news'],    // only these categories will be included in the language database (cannot be used together with "ignoredCategories").
            'ignoredItems' => ['config'],   // these files will not be processed.
            'scanTimeLimit' => null,        // increase to prevent "Maximum execution time" errors, if null the default max_execution_time will be used
            'searchEmptyCommand' => '!',    // the search string to enter the 'Translation' search field to find not yet translated items, set to null to disable this feature
            'defaultExportStatus' => 1,     // the default selection of languages to export, set to 0 to select all languages by default
            'defaultExportFormat' => 'json',// the default format for export, can be 'json' or 'xml'
            'tables' => [                   // Properties of individual tables
                [
                    'connection' => 'db',   // connection identifier
                    'table' => '{{%language}}',         // table name
                    'columns' => ['name', 'name_ascii'],// names of multilingual fields
                    'category' => 'database-table-name',// the category is the database table name
                ]
            ],
            'scanners' => [ // define this if you need to override default scanners (below)
                ScannerPhpFunction::class,
                ScannerPhpArray::class,
                ScannerJavaScriptFunction::class,
                ScannerDatabase::class,
            ],
        ],
        'yandex' => [
            'class' => YandexTurbo::class,
            'link' => 'https://urdu.uz/', // not required, default Url::home
            'elements' => [
                News::class,
            ],
            'cacheExpire' => 1, // 1 second. Default is 15 minutes
        ],
        'enableGzip' => true, // default is false
        'cacheExpire' => 3600, // 1 second. Default is 24 hours
    ],
];
