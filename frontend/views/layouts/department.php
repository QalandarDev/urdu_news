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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<?php


$contact = Yii::t('app', 'Contact');
$send = Yii::t('app', 'Send article');

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
    <?= $this->render('_menu'); ?>
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
        $centers = \backend\models\Center::find()->where(['cate' => 2])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $bulim = Yii::t('app', 'Departments');
        $home = Yii::t('app', 'Home');
        $news = Yii::t('app', 'News');
        $events = Yii::t('app', 'Events');
        $tuzilma = Yii::t('app', 'STRUCTURE');
        $univer = Yii::t('app', 'History of University');
        $nizom = Yii::t('app', 'Regulation of University');
        $rektorat = Yii::t('app', 'Rectorate');
        $faculty = Yii::t('app', 'Faculties');
        $department = Yii::t('app', 'Departments');
        $center = Yii::t('app', 'Centers and departments');
        $havola = Yii::t('app', 'Quick links');
        ?>

        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="mobile">
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a
                                            style="color: black;background-color:rgba(146, 173, 255, 0.05);"><b><?= $bulim ?></b></a>
                                </li>


                                <?php foreach ($centers as $centerr) { ?>

                                    <li <?php if ($url == "/frontend/web/uz/site/departmentview?id=$centerr->id" || $url == "/frontend/web/site/departmentview?id=$centerr->id" || $url == "/frontend/web/ru/site/departmentview?id=$centerr->id") {
                                        echo "class=\"active\"";
                                    } ?>><a style="font-family: Arial;font-size: 12px"
                                            href="<?= \yii\helpers\Url::to(['/site/departmentview?id=' . $centerr->id]) ?>"><?= $centerr[$name] ?></a>
                                    </li>

                                <?php } ?>

                            </ul>
                        </div>

                    </aside>
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a
                                            style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b><?= $havola ?></b></a>
                                </li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/about']) ?>"><?= $univer ?></a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/nizom']) ?>"><?= $nizom ?></a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/rektorat']) ?>"><?= $rektorat ?></a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/faculty']) ?>"><?= $faculty ?></a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/department']) ?>"><?= $department ?></a>
                                </li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/center']) ?>"><?= $center ?></a></li>

                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-md-9">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                    <!--                    <div class="single-service-wrap">-->
                    <!--                        <div class="single-service-active">-->
                    <!--                            <div class="single-service-img">-->
                    <!--                                <img src="assets/images/service/single-service1.jpg" alt="">-->
                    <!--                            </div>-->
                    <!--                            <div class="single-service-img">-->
                    <!--                                <img src="assets/images/service/single-service2.jpg" alt="">-->
                    <!--                            </div>-->
                    <!--                            <div class="single-service-img">-->
                    <!--                                <img src="assets/images/service/single-service3.jpg" alt="">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <h3>Financial Advise Lorem ipsum dolor.</h3>-->
                    <!--                        <p>We work closely with Employers across all industry sectors to ensure that their internal sed Human Resource systems processes align to their business requirements idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth. Take a 360-degree view of yours situations using our seds deep experience, industries specialization and global reach.</p>-->
                    <!--                        <p>Human Resource systems processes align to their business requirements idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth. Take a 360-degree view of yours situatio</p>-->
                    <!--                        <blockquote>-->
                    <!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta commodi illum ab voluptate asperiores facere, sit aliquid voluptatem nostrum ea eveniet, voluptatum delectus fugiat ex, alias unde cupiditate accusamus officiis rem expedita iusto recusandae. Nam.-->
                    <!--                        </blockquote>-->
                    <!--                        <h4>Their business requirements</h4>-->
                    <!--                        <p>That's just little bit more than the law will allow.Well the first thing you know ol' Jeds a millionaire. All of them had hair of gold like their mother the youngest one in curlsThe movie star the professor and Mary Ann here on Gilligans Isle., Well the first thing you know ol' Jeds a millionaire.</p>-->
                    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum et minima voluptatem earum harum quas magni impedit accusantium soluta, tempore, maxime qui cupiditate voluptatum consequuntur fugiat excepturi. Distinctio praesentium earum molestias, non, a facere fugit.</p>-->
                    <!--                        <h4>more than the law will</h4>-->
                    <!--                        <p>That's just little bit more than the law will allow.Well the first thing you know ol' Jeds a millionaire. All of them had hair of gold like their mother the youngest one in curlsThe movie star the professor and Mary Ann here on Gilligans Isle., Well the first thing you know ol' Jeds a millionaire.</p>-->
                    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum et minima voluptatem earum harum quas magni impedit accusantium soluta, tempore, maxime qui cupiditate voluptatum consequuntur fugiat excepturi. Distinctio praesentium earum molestias, non, a facere fugit.</p>-->
                    <!--                    </div>-->
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
    #st {

        font-family: Arial;
        font-size: 16px;

    }

    #h {

        font-family: Georgia;
        font-size: 20px;


    }

    #menu {

        font-family: Georgia;
        font-size: 13px;

    }

    #menu1 {

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

