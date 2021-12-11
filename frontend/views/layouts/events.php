<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <meta name="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<?php

$contact = Yii::t('app','Contact');
$send = Yii::t('app','Send article');

?>

<div class="wrap">
    <div class="search-area">
    <span class="closs-btn">Close</span>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="search-form">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search Here">
                        <button type="button" name="button" class="btn-style">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-area -->
    <!-- heared area start -->
  <?= $this->render('_menu')?>
    <!-- heared area end -->

    <!-- heared area end -->

    <div class="single-service-area ptb-100" style="margin-top: -100px">
<!--        <div class="breadcumb-area black-opacity bg-img-5">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12">-->
<!--                        <div class="breadcumb-wrap">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
        <?php
        $url = $_SERVER['REQUEST_URI'];
        $centers = \backend\models\Center::find()->where(['cate'=>1])->all();
        $bulim =  Yii::t('app','Departments');
        $home = Yii::t('app','Home') ;
        $news = Yii::t('app','News');
        $events = Yii::t('app','Events');
        $tuzilma = Yii::t('app','STRUCTURE');
        $univer = Yii::t('app','History of University');
        $nizom = Yii::t('app','Regulation of University');
        $rektorat = Yii::t('app','Rectorate');
        $faculty = Yii::t('app','Faculties');
        $department = Yii::t('app','Departments');
        $center = Yii::t('app','Centers and departments');
        $havola=Yii::t('app','Quick links');
        $catename="name_".Yii::$app->language;
        $cates= \backend\models\Newcate::find()->all();
        ?>
        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>

                </div>
                <div class="col-md-3" id="mobile">

                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b><?=$events?></b></a></li>
                                <?php foreach ($cates as $cate){?>
                                    <li <?php if($url =="/frontend/web/uz/site/viewevent?id=$cate->id" ||$url =="/frontend/web/site/viewevent?id=$cate->id" ||$url =="/frontend/web/ru/site/viewevent?id=$cate->id"){ echo "class=\"active\""; }?>><a href="<?=\yii\helpers\Url::to(['/site/viewevent?id='.$cate->id])?>"><?=$cate[$catename]?></a></li>
                                <?php }?>
                            </ul>
                        </div>

                    </aside>


                </div>
            </div>
        </div>
    </div>



    </div>

        <?= $this->render('_footer');?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<style>
    #st{

        font-family: Arial;
        font-size: 16px;
       
    }
    #h{

        font-family: Georgia;
        font-size: 20px;
       

    }
    #menu{

        font-family: Georgia;
        font-size: 13px;

    }
    #menu1{

        font-family: Arial;
        color: rgba(30, 38, 52, 0.77);
        font-size: 15px;

    }
</style>
<style>
    @media screen and (max-width: 600px) {
        #mobile {
            visibility: hidden;
            clear: both;
            float: left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }
    }
</style>

