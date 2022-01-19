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
<!--<div class="snowflakes" aria-hidden="true">-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<style>-->
<!--    @-webkit-keyframes snowflakes-fall {-->
<!--        0% {-->
<!--            top: -10%-->
<!--        }-->
<!--        100% {-->
<!--            top: 100%-->
<!--        }-->
<!--    }-->
<!---->
<!--    @-webkit-keyframes snowflakes-shake {-->
<!--        0% {-->
<!--            -webkit-transform: translateX(0px);-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--        50% {-->
<!--            -webkit-transform: translateX(80px);-->
<!--            transform: translateX(80px)-->
<!--        }-->
<!--        100% {-->
<!--            -webkit-transform: translateX(0px);-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--    }-->
<!---->
<!--    @keyframes snowflakes-fall {-->
<!--        0% {-->
<!--            top: -10%-->
<!--        }-->
<!--        100% {-->
<!--            top: 100%-->
<!--        }-->
<!--    }-->
<!---->
<!--    @keyframes snowflakes-shake {-->
<!--        0% {-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--        50% {-->
<!--            transform: translateX(80px)-->
<!--        }-->
<!--        100% {-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--    }-->
<!---->
<!--    .snowflake {-->
<!--        font-size: 2em;-->
<!--        position: fixed;-->
<!--        top: -10%;-->
<!--        z-index: 9999;-->
<!--        -webkit-user-select: none;-->
<!--        -moz-user-select: none;-->
<!--        -ms-user-select: none;-->
<!--        user-select: none;-->
<!--        cursor: default;-->
<!--        -webkit-animation-name: snowflakes-fall, snowflakes-shake;-->
<!--        -webkit-animation-duration: 10s, 3s;-->
<!--        -webkit-animation-timing-function: linear, ease-in-out;-->
<!--        -webkit-animation-iteration-count: infinite, infinite;-->
<!--        -webkit-animation-play-state: running, running;-->
<!--        animation-name: snowflakes-fall, snowflakes-shake;-->
<!--        animation-duration: 10s, 3s;-->
<!--        animation-timing-function: linear, ease-in-out;-->
<!--        animation-iteration-count: infinite, infinite;-->
<!--        animation-play-state: running, running-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(0) {-->
<!--        left: 1%;-->
<!--        -webkit-animation-delay: 0s, 0s;-->
<!--        animation-delay: 0s, 0s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(1) {-->
<!--        left: 10%;-->
<!--        -webkit-animation-delay: 1s, 1s;-->
<!--        animation-delay: 1s, 1s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(2) {-->
<!--        left: 20%;-->
<!--        -webkit-animation-delay: 6s, .5s;-->
<!--        animation-delay: 6s, .5s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(3) {-->
<!--        left: 30%;-->
<!--        -webkit-animation-delay: 4s, 2s;-->
<!--        animation-delay: 4s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(4) {-->
<!--        left: 40%;-->
<!--        -webkit-animation-delay: 2s, 2s;-->
<!--        animation-delay: 2s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(5) {-->
<!--        left: 50%;-->
<!--        -webkit-animation-delay: 8s, 3s;-->
<!--        animation-delay: 8s, 3s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(6) {-->
<!--        left: 60%;-->
<!--        -webkit-animation-delay: 6s, 2s;-->
<!--        animation-delay: 6s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(7) {-->
<!--        left: 70%;-->
<!--        -webkit-animation-delay: 2.5s, 1s;-->
<!--        animation-delay: 2.5s, 1s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(8) {-->
<!--        left: 80%;-->
<!--        -webkit-animation-delay: 1s, 0s;-->
<!--        animation-delay: 1s, 0s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(9) {-->
<!--        left: 90%;-->
<!--        -webkit-animation-delay: 3s, 1.5s;-->
<!--        animation-delay: 3s, 1.5s-->
<!--    }-->
<!---->
<!--    /* Demo Purpose Only*/-->
<!--    .demo {-->
<!--        font-family: 'Raleway', sans-serif;-->
<!--        color: #fff;-->
<!--        display: block;-->
<!--        margin: 0 auto;-->
<!--        padding: 15px 0;-->
<!--        text-align: center;-->
<!--    }-->
<!---->
<!--    .demo a {-->
<!--        font-family: 'Raleway', sans-serif;-->
<!--        color: #000;-->
<!--    }-->
<!--</style>-->
</body>
</html>
<?php $this->endPage() ?>
