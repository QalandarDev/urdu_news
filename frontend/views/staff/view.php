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


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees and Teachers'), 'url' => ['/staff/index'],'template'=>"<li class='breadcrumb-item'>{link}</li>"];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Publications'),'template'=>"<li class='breadcrumb-item'>{link}</li>"];





?>
<div class="container">

<div class="page-header"><h2 class="h1-text"><?=Yii::t('app','Publications')?></h2></div>

	
	

	<?php   
	$searchform = new Search(); 
	$center=$searchform->mydep();
	$lavozim=$searchform->mylavozim();
	
	?>
 <?php Pjax::begin([
        'submitEvent' => 'change',
    ]); ?>
    <div class="row" style="margin-bottom:20px">
        <?= Html::beginForm(['/staff/publactivity'], 'POST',
            ['id' => 'publ',
                'data-pjax' => 1,

            ]) ?>
       
        <div class="col-sm-4">
            <?= Html::DropDownList('fakultet', $_POST['fakultet'], $fakultetlar, [
                'prompt' => '--Fakultetni tanlang--',
                'id' => 'fakultet',
                'class' => 'form-control'
            ]) ?>
        </div>
		<div class="col-sm-4">
            <?= Html::dropDownList('kafedra', $_POST['kafedra'], $kafedralar, [
                'prompt' => '--Kafedrani tanlang--',
                'id' => 'kafedra',
                'class' => 'form-control'
            ]) ?>
        </div>
       
        <div class="col-sm-4">
            <?= Html::submitButton(Yii::t('app','OK'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?= Html::endForm(); ?>
    </div>		
	  <?php Pjax::end();?>
		
	<?php Pjax::begin(); ?>
		<table class='table table-bordered'>
			<thead >
				<tr class='info'><th rowspan=2>FIO</th><th rowspan=2><?=Yii::t('app','Total citations')?></th><th colspan=12>Maqolalar soni (yillar kesimida)</th></tr>
				<tr class='info'><th>2010</th><th>2011</th><th>2012</th><th>2013</th><th>2014</th><th>2015</th><th>2016</th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th></tr>
			</thead>
			
<?php	
			$jj=0;
        foreach ($model as $item){
		$Publications=	json_decode($item['Publications'], true);
		printf("<tr><td><p ><a style='font-size:20px' href='https://urdu.uz/site/viewdep?id=%s'>%s</a></p>%s, %s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $item['id'], $item['name_'.Yii::$app->language], $center[$item['cate']], $lavozim[$item['lav_id']], $Publications["total_citations"],$Publications["publications_per_year"][2010],$Publications["publications_per_year"][2011],$Publications["publications_per_year"][2012],$Publications["publications_per_year"][2013],$Publications["publications_per_year"][2014],$Publications["publications_per_year"][2015],$Publications["publications_per_year"][2016],$Publications["publications_per_year"][2017],$Publications["publications_per_year"][2018],$Publications["publications_per_year"][2019],$Publications["publications_per_year"][2020],$Publications["publications_per_year"][2021]);
		$jj=$jj+$Publications["total_citations"];
		}; ?>
	 </table>
			
 		<?=$jj;?>
		
<?php echo LinkPager::widget(['pagination' => $pages ]);?>
 
    <?php Pjax::end();?>
	</div>
