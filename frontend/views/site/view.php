<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0"></script>

<?php
/* @var $this \yii\web\View */
/* @var $home string */

$titlepage = Yii::t('app','Urgench State University');
$lang = Yii::t('app','en/site');
$this->title = $titlepage;
Yii::$app->view->registerMetaTag([
        'name' => 'description',
        'content' => strip_tags($model[$title])
    ]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:url',
	'content' => 'https://urdu.uz/'.$lang.'/view?id='.$model['id']
 	]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:image',
	'content' => 'https://urdu.uz/images/'.$model['img']
 	]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:type',
	'content' => 'article'
 	]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:title',
	'content' => $model[$title]
 	]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:description',
	'content' => strip_tags($model[$text])
 	]);
?>

<div class="col-md-12">
    <div class="single-service-wrap">
        <div style="background-color: #296dc1;padding: 16px 0px 5px 15px">
        <p id="h" style="color: white"><b><?=$model[$title]?></b></p>
        </div>

         <p style="font-size:25px;text-align: justify;">
             <?=$model[$text]?>
          </p>
		<!--<img src="<?php ///$model['img']?>" alt="<?php //$titlepage?>" style="width:100%" alt="">-->
         </div>
</div>
<div class="col-md-12" style="margin-top: 20px">
	<div class="col-md-1" style="font-size: 15px; font-weight: bold; color: #0a7190; margin: 4px 0;">Ulashish:</div>
	<div class="col-md-2">
	<a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Furdu.uz%2F<?=$lang?>%2Fview%3Fid%3D<?=$model['id']?>&amp;src=sdkpreparse" class="btn btn-info"><i class="fa fa-facebook"></i></a>
	</div>
</div>

