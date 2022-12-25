<?php

namespace app\assets;

use rmrevin\yii\fontawesome\CdnFreeAssetBundle;
use rmrevin\yii\fontawesome\CdnProAssetBundle;
use rmrevin\yii\fontawesome\FontAwesome;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;

class EducavoAsset extends AssetBundle
{
    public $basePath = '@webroot/educavo';
    public $baseUrl = '@web/educavo';

    public $css =
        [
            'css/bootstrap4.min.css',
            'css/animate.css',
            'css/off-canvas.css',
            'css/rs-menu.css',
            'css/rs-spacing.css',
            'css/styles.css',
            'css/responsive.css',
//            'fonts/flaticon.css'
        ];

    public $js =
        [
            'js/jquery.min.js',
            'js/modernizr.js',
            'js/bootstrap4.min.js',
            'js/rs-menu.js',
            'js/jquery-nav.js',
            'js/wow.min.js',
            'js/plugins.js',
            'js/jquery.magnific-popup.min.js',
            'js/contact.js',
            'js/owl-carousel.js',
            'js/counterup.main.js',
            'js/main.js',

        ];
    public $depends =
        [
            CdnFreeAssetBundle::class,
            CdnProAssetBundle::class,
//            BootstrapAsset::class
        ];
}