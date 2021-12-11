<?php


namespace frontend\assets;


use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class NewAssets extends AssetBundle
{
    public $css = [];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}