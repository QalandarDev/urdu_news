<?php

namespace frontend\assets;

use yii\web\AssetBundle;

final class FontAwesomeAsset extends AssetBundle
{
    public $basePath = '@webroot/font-awesome';
    public $baseUrl = '@web/font-awesome';
    public $css = [
        'css/pro.css',
    ];
}