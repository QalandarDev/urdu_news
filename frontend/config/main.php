<?php

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
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'uz',
	'homeUrl'=>'/',
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
			"baseUrl"=>"",
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__.'/routes.php',
            'ignoreLanguageUrlPatterns' => [
                '#^yandex#' => '#^yandex#',
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],

    ],
    'params' => $params,
    'modules' => [
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
