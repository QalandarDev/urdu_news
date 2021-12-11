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
    <meta http-equiv="Urganch davlat universiteti"
          content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <meta name="Urganch davlat universiteti"
          content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?=$this->title ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<?php


$contact = Yii::t('app', 'Contact');
$send =  Yii::t('app', 'Send article');

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
    <?= $this->render('_menu') ?>


    <div class="single-service-area">
        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px;margin-bottom: 0">
        <br>
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
        $url = Yii::$app->request->get('cate');
        $centers = \backend\models\Center::find()->where(['cate' => 1])->all();
        $bulim = Yii::t('app','Faculties');
        $havola = Yii::t('app','Quick links');
        $catename = "name_" . Yii::$app->language;
        $cates = \backend\models\Newcate::find()->all();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-6">

                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'homeLink' => [
                            'label' => Yii::t('app', 'Home'),
                            'url' => ['site/index']
                        ],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>

                </div>
                <div class="col-md-3 col-sm-6" id="mobile">
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a
                                        style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b><?= Yii::t('app', 'News') ?></b></a>
                                </li>
                                <?php foreach ($cates as $cate) { ?>
                                    <li <?php if ($url ==$cate->id) {
                                        echo "class=\"active\"";
                                    } ?>>
                                        <a href="<?= \yii\helpers\Url::to(['news/index','cate'=>$cate->id]) ?>">
                                            <?= $cate[$catename] ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </aside>


                </div>

            </div>
        </div>
    </div>


</div>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
