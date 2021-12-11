<?php
/* @var $this \yii\web\View */
/* @var $home string */


use yii\helpers\Html;
use yii\helpers\Url;

$title = "Bo'sh ish o'rinlari";
$this->title = $title;

?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0"></script>

<?php


$lang = array('title_uz'=>'site','title_ru'=>'ru/site','title_en'=>'en/site');
$this->title = $title;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => strip_tags($model->title)
]);
Yii::$app->view->registerMetaTag([
    'property' => 'og:url',
    'content' => 'https://urdu.uz/vacancy/index',
]);

Yii::$app->view->registerMetaTag([
    'property' => 'og:type',
    'content' => 'article'
]);
Yii::$app->view->registerMetaTag([
    'property' => 'og:title',
    'content' => $model->title
]);
Yii::$app->view->registerMetaTag([
    'property' => 'og:description',
    'content' => strip_tags($model->text)
]);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="single-service-wrap" style="padding-top: 10px">
                <div style="background-color: #296dc1;padding: 16px 0 5px 15px">
                    <p id="h" style="color: white"><b><?=$model->title?></b></p>
                </div>

                <p style="font-size:25px;text-align: justify;">
                    <?=$model->text?>
                </p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 20px">
            <div class="col-md-1" style="font-size: 15px; font-weight: bold; color: #0a7190; margin: 4px 0;">Ulashish:</div>
            <div class="col-md-2">
                <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Furdu.uz%2Fvakancy%2Findex%3F&amp;src=sdkpreparse" class="btn btn-info"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>
</div>


