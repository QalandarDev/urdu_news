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
$aboutall = Yii::t('app','About');
$aboutall1 = Yii::t('app', 'Staff');
$titlepage = Yii::t('app','Urgench State University');
$titlenews = Yii::t('app', 'News');
?>

<div class="row">
    <div class="col-xs-12">
        <div class="portfolio-menu ">
            <a href="<?= Url::to(['site/centerview', 'id' => $model->id]) ?>"
               class="btn btn-primary  "> <?= $aboutall1 ?></a>
            <a href="<?= Url::to(['site/center-about', 'id' => $model->id]) ?>"
               class="btn btn-primary  "><?= $aboutall ?></a>
            <?php if ($model->id ===21 or $model->id ===90 or $model->id ===95): ?>
                <a href="<?= Url::to(['site/centernews', 'id' => $model->id]) ?>"
                   class="btn btn-primary  "> <?= $titlenews?></a>
            <?php endif; ?>


        </div>
    </div>
</div>
<div class="row grid">
    <div class="col-md-12 portfolio clean1 col-sm-12 col-xs-12 col" id="myDIV">
        <div class="row">
            <?php foreach ($hodim as $views) { ?>
            <div class="col-md-12" style=" padding: 20px 0px;">

                <div style="float:left">
                    <img src="<?= $home ?>/hodimlar/<?= $views['img'] ?>" alt="<?= $titlepage ?>"
                         alt="<?= $views[$name] ?>" style="
    height: 200px;
    width: 200px;
    object-fit: cover;
    margin-right: 50px;
    object-position: top;
    border: 1px solid #eee;"/>
                </div>

                <div style="padding: 20px 0px">


                    <h4><b><?= $views[$name] ?></b></h4>
                    <p id="st"><?= $views[$lav] ?></p>
                    <p id="st"><i class="fa fa-envelope"></i> <?= $views['email'] ?></p>
                    <p id="st"><i class="fa fa-phone"></i> <?= $views['tel'] ?></p>
                    <a href="<?= \yii\helpers\Url::to(['/site/viewcen?id=' . $views->id]) ?>"
                       class="btn-style pull-left"><?= $hol[$title] ?></a><br>


                </div>

			</div>
                <?php } ?>
            </div>
        </div>
    </div>
