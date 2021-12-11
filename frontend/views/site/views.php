

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.06.2019
 * Time: 17:30
 */
use Yii;

$titlepage =Yii::t('app','Urgench State University');
$lang = Yii::t('app','en/site');
$this->title = $titlepage;
Yii::$app->view->registerMetaTag([
        'name' => 'description',
        'content' => strip_tags($model[$title])
    ]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:url', 
	'content' => 'https://urdu.uz/'.$lang.'/views?id='.$model['id']
 	]);
Yii::$app->view->registerMetaTag([
	'property' => 'og:image', 
	'content' => 'https://urdu.uz/backend/web/images/'.$model['img']
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0"></script>
<div class="col-md-12" style="margin-top: -35px">
    <div class="single-service-wrap">
        <blockquote ><p id="h"><b><?=$model[$title]?></b></p></blockquote>
       
         <p id="st" style="background-color: rgba(0, 37, 241, 0.03);"><br>
             <?=$model[$text]?>
          </p>

         </div>
</div>

<div style="float: right !important; margin-top:20px;"> 
<a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Furdu.uz%2F<?=$lang?>%2Fviews%3Fid%3D<?=$model['id']?>&amp;src=sdkpreparse" class="btn btn-info"><i class="fa fa-facebook"></i></a></div>
