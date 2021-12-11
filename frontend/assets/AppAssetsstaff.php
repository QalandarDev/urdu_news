<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetsstaff extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'martxa/martxa/assets/css/bootstrap.min.css',
        'martxa/martxa/assets/css/animate.css',
        'martxa/martxa/assets/css/owl.carousel.css',
        'martxa/martxa/assets/css/owl.carousel.css',
        'martxa/martxa/assets/css/font-awesome.min.css',
        'martxa/martxa/assets/css/magnific-popup.css',
        'martxa/martxa/assets/css/slicknav.min.css',
        'martxa/martxa/assets/css/slicknav.min.css',
        'martxa/martxa/assets/css/styles.css',
        'martxa/martxa/assets/css/responsive.css',
    ];
    public $js = [
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
}
