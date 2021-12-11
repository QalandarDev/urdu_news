
<style>
.checkbox {
  padding-left: 20px;
}
.checkbox label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  
}
.checkbox input[type="checkbox"],
.checkbox input[type="radio"] {
 width: 25px;
 height: -webkit-fill-available;
 left:0;
}

</style>
<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use kartik\select2\Select2;
use kartik\base\InputWidget;
use yii\web\JsExpression;
use backend\models\Center;
use backend\models\Hodim;
use backend\models\Search;

$this->title=Yii::t('app','Urgench State University')."-".Yii::t('app','Employees and Teachers');

$this->params['breadcrumbs'][] = Yii::t('app','Employees and Teachers');
?>



	<?=Breadcrumbs::widget([
    'homeLink'=>['label'=>Yii::t('yii','Home'), 'url'=>'https://urdu.uz',  ],
    'links'=>isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs']:[],
    ]);  
    ?> 

	
	<div class='col-md-12'>

	<?php   
	$searchform = new Search(); 
	$center=$searchform->mydep();
	$lavozim=$searchform->mylavozim();
		?>
		
		<?php Pjax::begin(); ?>
		<ul class="list-group">
 		<?php foreach ($model as $item) { ?>
			
		<li class="list-group-item list-group-item-action">
		<p ><a style="font-size:20px"href="/admin/hodim/publedit?id=<?=$item['id']?>"><?=$item['name_'.Yii::$app->language]?></a></p>
		<span class="text-dark d-block"><?=$center[$item['cate']]?></span>, <span class="text-dark d-block"><?=$lavozim[$item['lav_id']]?></span> 
			</li>
		<?php }?>
		</ul>
		
<?php echo LinkPager::widget(['pagination' => $pages ]);?>
 
    <?php Pjax::end();?>
	</div>
