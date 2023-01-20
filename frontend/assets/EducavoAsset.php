<?php

namespace frontend\assets;

use rmrevin\yii\fontawesome\CdnFreeAssetBundle;
use rmrevin\yii\fontawesome\CdnProAssetBundle;
use yii\bootstrap5\BootstrapAsset;
use yii\web\AssetBundle;

class EducavoAsset extends AssetBundle
{
    public $basePath = '@webroot/educavo';
    public $baseUrl = '@web/educavo';

    public $css =
        [
            'css/animate.css',
            'css/off-canvas.css',
            'css/rs-menu.css',
            'css/rs-spacing.css',
            'css/styles.css',
            'css/responsive.css',
        ];

    public $js =
        [
            'js/jquery.min.js',
//            'js/modernizr.js',
            'js/rs-menu.js',
//            'js/jquery-nav.js',
            'js/wow.min.js',
//            'js/plugins.js',
            'js/jquery.magnific-popup.min.js',
//            'js/contact.js',
            'js/owl-carousel.js',
//            'js/counter-up.main.js',
            'js/main.js',

        ];
    public $depends =
        [
            CdnFreeAssetBundle::class,
            CdnProAssetBundle::class,
            BootstrapAsset::class
        ];
}