<?php
/**
 * @var $this \yii\web\View
 * @var $home string
 * @var $model \backend\models\News
 *
 */

use yii\helpers\Url;
use yii\helpers\StringHelper;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['news/index']];
$this->params['breadcrumbs'][] = StringHelper::truncate($model->title, 40);
?>
<!--<div id="fb-root"></div>-->
<!--<script async defer crossorigin="anonymous"-->
<!--       src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0"></script>-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/uz_UZ/sdk.js#xfbml=1&version=v7.0"></script>
<?php

$this->title = Yii::t('app', 'Urgench State University');

$this->registerMetaTag([
    'name' => 'description',
    'content' => strip_tags($model->title)
]);
$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::toRoute(['news/index', 'id' => $model->id], true)
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => $model->img,

]);
$this->registerMetaTag([
    'property' => 'og:image:width',
    'content' => 300,
]);
$this->registerMetaTag([
    'property' => 'og:image:height',
    'content' => 250,
]);


$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'article'
]);
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $model->title
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => strip_tags($model->text)
]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="single-service-wrap">
            <div style="background-color: #296dc1;padding: 16px 0px 5px 15px; border-radius: 5px">
                <p style="font-size: 24px;color: white; margin-top: 0; margin-bottom: 10px"><?= $model->title ?></p>
            </div>
            <hr>

            <div >
                <?= $model->text ?>
                <p></p>
            </div>
        </div>
    </div>
</div>
<?php
$url = Url::to(['news/index', 'id' => $model->id], true);
?>
<div class="row">
    <div class="col-md-12" style="margin-top: 20px">
        <div class="col-md-1" style="font-size: 15px; font-weight: bold; color: #0a7190; margin: 4px 0;">Ulashish:</div>
        <div class="col-md-1">
            <a target="_blank"
               href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>&amp;src=sdkpreparse"
               class="btn btn-info"><i class="fa fa-facebook"></i></a>
        </div>
		<div class="col-md-1">
            <a target="_blank"
               href="https://t.me/share/url?url=<?= $url ?>&text=<?=rawurlencode($model->title)?>"
               class="btn btn-info"><i class="fa fa-telegram"></i></a>
        </div>
		
    </div>
</div>
<hr/>
