<?php
use yii\widgets\Breadcrumbs;
$titlepage = Yii::t('app','Urgench State University');


$title = "title_";
$title .= Yii::$app->language;
$date = Yii::t('app','Last updated: ');
$titleo = Yii::t('app','Feedback');
$title1 = Yii::t('app','Item of message');
$title2 = Yii::t('app','E-mail');
$title3 = Yii::t('app','Full content');
$title4 = Yii::t('app','Send');
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

</div>
