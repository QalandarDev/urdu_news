<?php
use yii\widgets\Breadcrumbs;
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;


$date = Yii::t('app','Last updated: ');
$titleo = Yii::t('app','Feedback');
$title1 = Yii::t('app','Item of message');
$title2 = Yii::t('app','E-mail');
$title3 = Yii::t('app','Full content');
$title4 = Yii::t('app', 'Send');
$this->params['breadcrumbs'][] =$model[$title];
//$this->params['breadcrumbs'][] = ['label' => $mytext[Yii::$app->language], 'url' => ['/site/department']];

//$this->params['breadcrumbs'][] =  ['label'=>$model[$name],'template' => "<li><b>{link}</b></li>\n"];
?>

<div class="col-md-12">
            <div class="row">
                <div class="page-header" > <h2 class="h1-text"><?=$model[$title]?></h2></div>
			</div>
	
	<p id="st" style="text-align: justify;"> <?=$model[$text]?></p>
          
      
		
               <hr>
<?php if($id==61){ ?>
    <p style="padding: 2px;color: blue"><b><?=$titleo?></b></p>
    <?php \yii\bootstrap\ActiveForm::begin()?>
    <label for=""><?=$title1?> </label>
    <input type="text" class="form-control">
    <label for=""><?=$title2?></label>
    <input type="text" class="form-control" style="margin-top: 2px">
    <label for=""><?=$title3 ?></label>
    <textarea name="" class="form-control"; style="height: 200px"></textarea>
    <button class="pull-right btn btn-success" style="margin-top: 5px"><?=$title4 ?></button>
    <?php \yii\bootstrap\ActiveForm::end()?>


<?php }?>

</div>
