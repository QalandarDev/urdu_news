
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
<div class="page-header"><h2 class="h1-text"><?=Yii::t('app','Employees and Teachers')?></h2></div>

	
	<div class='col-md-8'>

	<?php   
	$searchform = new Search(); 
	$center=$searchform->mydep();
	$lavozim=$searchform->mylavozim();
		?>
		
		<?php Pjax::begin(); ?>
		<ul class="list-group">
 		<?php foreach ($model as $item) { ?>
			
		<li class="list-group-item list-group-item-action">
		<p ><a style="font-size:20px"href="https://urdu.uz/site/viewdep?id=<?=$item['id']?>"><?=$item['name_'.Yii::$app->language]?></a></p>
		<span class="text-dark d-block"><?=$center[$item['cate']]?></span>, <span class="text-dark d-block"><?=$lavozim[$item['lav_id']]?></span> 
			</li>
		<?php }?>
		</ul>
		
<?php echo LinkPager::widget(['pagination' => $pages ]);?>
 
    <?php Pjax::end();?>
	</div>
	<div class="col-md-4">
    
    
   
		<div class="panel panel-default panel-searchbox">
    <div class="panel-heading"><i class="fa fa-search"></i> <?=Yii::t('app','Advanced Search')?></div>
    <div class="panel-body">
    
    <?php
    $url = \yii\helpers\Url::to(['search']);
    $searchform = new Search();
  
      
    $form = ActiveForm::begin(['id' => 'search-form']); 
      
    echo $form->field($searchform, 'name')->widget(Select2::classname(), [
     
    'options' => ['placeholder' => Yii::t('app', 'Search employee'),  ],
    'pluginOptions' => [
        'tags' => true,
         'minimumInputLength' => 3,
         'language' => [ 'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
        ],
         'ajax' => [
            'url' => $url,
            'dataType' => 'json',
            'data' => new JsExpression('function(params) { return {q:params.term}; }')
        ],
      'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
        'templateResult' => new JsExpression('function(name) { return name.text; }'),
        'templateSelection' => new JsExpression('function (name) { return name.text; }'),
    ],
]);
  ?>
    
    
  <?php
       
   echo $form->field($searchform, 'dep')->widget(Select2::classname(), [
    
    'data' => $searchform->mydep(),
    'options' => ['placeholder' => Yii::t('app', 'Select a department'),],
    'pluginOptions' => [
        'tags' => true,
        'tokenSeparators' => [',', ' '],
		
    ],]);
    
	echo $form->field($searchform, 'filters')->checkboxList([
		'1'=>Yii::t('app','University administration'),
		'2'=>Yii::t('app','Directors and deans'),
		'3'=>Yii::t('app','Heads of department'),
		'4'=>Yii::t('app','Professors'),
		'5'=>Yii::t('app','Associate professors'),
		'6'=>Yii::t('app','Assistants and Teachers'),
		'7'=>Yii::t('app','Heads of office'),
		'8'=>Yii::t('app','Researchers'),
	] );
    ?>

        <button class="btn btn-info btn-block"><i class="fa fa-search"></i> <?=Yii::t('app', 'Search')?></button>
      
  
        <?php ActiveForm::end(); ?> 
     
    </div>
		</div>
			</div>
	
	