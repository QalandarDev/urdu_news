<?php

namespace frontend\assets;

use app\assets\EducavoAsset;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
//        'martxa/martxa/assets/css/bootstrap.min.css',
//        'martxa/martxa/assets/css/animate.css',
//        'martxa/martxa/assets/css/owl.carousel.css',
//        'martxa/martxa/assets/css/font-awesome.min.css',
//        'martxa/martxa/assets/css/magnific-popup.css',
//        'martxa/martxa/assets/css/slicknav.min.css',
//        'martxa/martxa/assets/css/slicknav.min.css',
//        'martxa/martxa/assets/css/styles.css',
//        'martxa/martxa/assets/css/responsive.css',
//        'martxa/martxa/assets/css/responsive.css',
        'owlCarousel/assets/owl.carousel.css',
//        'owlCarousel/assets/owl.theme.default.css',

    ];
    public $js = [

//        'martxa/martxa/assets/js/vendor/modernizr-2.8.3.min.js',
//        'martxa/martxa/assets/js/vendor/jquery-1.12.4.min.js',
//        'martxa/martxa/assets/js/bootstrap.min.js',
//        'martxa/martxa/assets/js/counterup.main.js',
//        'martxa/martxa/assets/js/isotope.pkgd.min.js',
//        'martxa/martxa/assets/js/jquery.waypoints.min.js',
//        'martxa/martxa/assets/js/isotope.pkgd.min.js',
//        'martxa/martxa/assets/js/imagesloaded.pkgd.min.js',
//        'martxa/martxa/assets/js/jquery.magnific-popup.min.js',
//        'martxa/martxa/assets/js/jquery.slicknav.min.js',
//        'martxa/martxa/assets/js/snake.min.js',
//        'martxa/martxa/assets/js/plugins.js',
//        'martxa/martxa/assets/js/wow.min.js',
//        'martxa/martxa/assets/js/owl.carousel.min.js',
//        'martxa/martxa/assets/js/scripts.js',
//        'owlCarousel/owl.carousel.js',
    ];
    public $depends = [
        EducavoAsset::class,
//        'yii\bootstrap\BootstrapAsset',
    ];

}
