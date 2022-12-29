<?php

use lajax\translatemanager\services\scanners\ScannerDatabase;
use lajax\translatemanager\services\scanners\ScannerJavaScriptFunction;
use lajax\translatemanager\services\scanners\ScannerPhpArray;
use lajax\translatemanager\services\scanners\ScannerPhpFunction;
use lajax\translatemanager\Module;
use yii\log\FileTarget;
use codemix\localeurls\UrlManager;
use yii\i18n\DbMessageSource;
use backend\models\News;
use himiklab\sitemap\behaviors\SitemapBehavior;
use himiklab\sitemap\Sitemap;
use lan143\yii2_yandexturbo\YandexTurbo;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'translatemanager'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'uz',
    'homeUrl' => '/',
    'components' => [
        'view' => [
            'class' => 'daxslab\taggedview\View',
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
            'identityClass' => 'common\models\User',
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
                '*' => [
                    'class' => DbMessageSource::class,
                    'db' => 'db',
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                    'enableCaching' => true,
                    'cachingDuration' => 1
                ],
                'news' => [
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
            // IMPORTANT: for detailed instructions read the chapter about root configuration.
//            'layout' => 'language',         // Name of the used layout. If using own layout use 'null'.
            'allowedIPs' => ['*'],  // IP addresses from which the translation interface is accessible.
            'roles' => ['?'],               // For setting access levels to the translating interface.
            'tmpDir' => '@runtime',         // Writable directory for the client-side temporary language files.
            // IMPORTANT: must be identical for all applications (the AssetsManager serves the JavaScript files containing language elements from this directory).
            'phpTranslators' => ['::t'],    // list of the php function for translating messages.
//            'jsTranslators' => ['lajax.t'], // list of the js function for translating messages.
            'patterns' => ['*.php'],// list of file extensions that contain language elements.
//            'ignoredCategories' => ['yii'], // these categories won't be included in the language database.
            'onlyCategories' => ['news'],    // only these categories will be included in the language database (cannot be used together with "ignoredCategories").
            'ignoredItems' => ['config'],   // these files will not be processed.
            'scanTimeLimit' => null,        // increase to prevent "Maximum execution time" errors, if null the default max_execution_time will be used
            'searchEmptyCommand' => '!',    // the search string to enter in the 'Translation' search field to find not yet translated items, set to null to disable this feature
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
        'sitemap' => [
            'class' => Sitemap::class,
            'models' => [
                // your models
                News::class,
                // or configuration for creating a behavior
//                [
//                    'class' => 'app\modules\news\models\News',
//                    'behaviors' => [
//                        'sitemap' => [
//                            'class' => SitemapBehavior::className(),
//                            'scope' => function ($model) {
//                                /** @var \yii\db\ActiveQuery $model */
//                                $model->select(['url', 'lastmod']);
//                                $model->andWhere(['is_deleted' => 0]);
//                            },
//                            'dataClosure' => function ($model) {
//                                /** @var self $model */
//                                return [
//                                    'loc' => Url::to($model->url, true),
//                                    'lastmod' => strtotime($model->lastmod),
//                                    'changefreq' => SitemapBehavior::CHANGEFREQ_DAILY,
//                                    'priority' => 0.8,
//                                    'xhtml:link' => [
//                                        [
//                                            'hreflang' => 'en',
//                                            'href' => Url::to(['url_en'], true),
//                                        ],
//                                        [
//                                            'hreflang' => 'de',
//                                            'href' => Url::to(['url_de'], true),
//                                        ],
//                                        //...
//                                    ],
//                                ];
//                            }
//                        ],
//                    ],
//                ],
            ],
        ],
        'urls' => [
            // your additional urls
            [
                'loc' => '/news/index',
                'changefreq' => SitemapBehavior::CHANGEFREQ_DAILY,
                'priority' => 0.8,
                'news' => [
                    'publication' => [
                        'name' => 'Example Blog',
                        'language' => 'en',
                    ],
                    'access' => 'Subscription',
                    'genres' => 'Blog, UserGenerated',
                    'publication_date' => 'YYYY-MM-DDThh:mm:ssTZD',
                    'title' => 'Example Title',
                    'keywords' => 'example, keywords, comma-separated',
                    'stock_tickers' => 'NASDAQ:A, NASDAQ:B',
                ],
                'images' => [
                    [
                        'loc' => 'http://example.com/image.jpg',
                        'caption' => 'This is an example of a caption of an image',
                        'geo_location' => 'City, State',
                        'title' => 'Example image',
                        'license' => 'http://example.com/license',
                    ],
                ],
            ],
        ],
        'enableGzip' => true, // default is false
        'cacheExpire' => 1, // 1 second. Default is 24 hours
    ],
];
