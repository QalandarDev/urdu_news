<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'owlCarousel/assets/owl.carousel.css',

    ];
    public $depends = [
        EducavoAsset::class
    ];

}
