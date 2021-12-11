<?php


/* @var $this \yii\web\View */
/* @var $model array|\backend\models\Center|null|\yii\db\ActiveRecord */
/* @var $name string */
/* @var $text string */
/* @var $hol string[] */
/* @var $lav string */
/* @var $hodim array|\backend\models\Hodim[]|\yii\db\ActiveRecord[] */
/* @var $newtext string */
/* @var $newtitle string */
/* @var $eventtext string */
/* @var $eventtitle string */
/* @var $news array|\backend\models\News[]|\yii\db\ActiveRecord[] */
/* @var $view array|\backend\models\CenterPage|null|\yii\db\ActiveRecord */
/* @var $loc string */
/* @var $about string */
/* @var $position string */
/* @var $reception string */
/* @var $sname string */
/* @var $events array|\backend\models\Events[]|\yii\db\ActiveRecord[] */

/* @var $home bool|string */

use yii\helpers\Url;

$title = "title_" . Yii::$app->language;
$aboutall = Yii::t('app', 'About');
$aboutall1 =Yii::t('app', 'Staff');
$titlenews =Yii::t('app', 'News');
//$mytext['uz'] = "Markazlar va bo'limlar";
//$mytext['ru'] = "Центры и отделы";
//$mytext['en'] = "Centres and departments";

$this->title = Yii::t('app', 'Centres and departments');
$this->params['breadcrumbs'][] = ['label' => $this->title , 'url' => ['/site/center']];
$this->params['breadcrumbs'][] = ['label' => $model[$name], 'template' => "<li><b>{link}</b></li>\n"];
?>

<div class="row">
    <div class="col-xs-12">
        <div class="portfolio-menu ">
            <a href="<?= Url::to(['site/centerview', 'id' => $model->id]) ?>"
               class="btn btn-primary  "> <?= $aboutall1?></a>
            <a href="<?= Url::to(['site/center-about', 'id' => $model->id]) ?>"
               class="btn btn-primary  "><?= $aboutall ?></a>
            <?php if ($model->id ===21): ?>
                <a href="<?= Url::to(['site/centernews', 'id' => $model->id]) ?>"
                   class="btn btn-primary  "> <?= $titlenews ?></a>
            <?php endif; ?>


        </div>
    </div>
</div>
<div class="row grid">
    <div class="col-md-12 portfolio clean1 col-sm-12 col-xs-12 col" id="myDIV">
        
        <p style="text-align: justify"><?= $view[$about] ?></p>


    </div>
</div>