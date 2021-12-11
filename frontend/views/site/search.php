<style>

	.news{
	margin-top: 20px;
	text-align: justify;
	}
</style>
<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use backend\models\Newcate;


$this->title=Yii::t('app','Urgench State University')."-".Yii::t('app','Search');

$this->params['breadcrumbs'][] = Yii::t('app','Search');
$cat = new Newcate();
?>



<div class="container">
<div class="page-header"><h2 class="h1-text"><?=Yii::t('app','Search')?></h2></div>

	
	<div class='col-md-12'>
<div class="alert " role="alert"><?=$haserror?></div>
	
		<?php Pjax::begin(); ?>
		
 		<?php foreach ($result as $item) { ?>
			
		<div class="news">
		<p ><a style="font-size:20px"href="https://urdu.uz/news/<?=$item['id']?>"><?= mb_substr($item['title_'.Yii::$app->language], 0, 120) ?> </a></p>
		<span ><i class="fa fa-list"></i> <a href="<?=Url::to('/site/viewcate?id='.$item['cate'] )?>"><?=$cat->Cates($item['cate'])['name_uz']?></a></span> , <span ><i class="fa fa-calendar"></i> <?=$item['date']?></span>   
		<p class="text-dark d-block"><?=mb_substr(strip_tags($item['text_'.Yii::$app->language]),0, 400)?> ... </p> 
		</div>
		<?php }?>
		
		
<?php echo LinkPager::widget(['pagination' => $pages ]);?>
 
    <?php Pjax::end();?>
	</div>
</div>
	
	
	