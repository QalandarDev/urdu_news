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
    <meta http-equiv="Content-type" content="text/html">
    <meta name="description" content="Urganch davlat universiteti,
	Urgench state university,
	Ургенчский Государственный Университет,
	Urganch,
	Xiva,Khiva,Xorazm,Kharezm,
	urdu,ursu,urdu.uz ">
    <meta name="keywords" content="Urganch davlat universiteti,
	 Urgench state university,
	 Ургенчский Государственный Университет,
	 Urganch,Xiva,Khiva,Xorazm,Kharezm,urdu,ursu,urdu.uz">
    <meta name="google-site-verification" content="eCrylK-sQ0B3oCcDvNNqKv3eMOKph-KjMpkJXzQP8KU"/>
    <meta name="Urganch davlat universiteti"
          content="Urganch davlat universiteti, Urgench state university, Ургенчский Государственный Университет, Urganch, Xiva, Khiva, Xorazm, Kharezm, urdu, ursu, UrDU, UrSU">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <!-- <script src="https://www.googletagmanager.com/gtag/js?id=UA-137157104-1" async=""></script>-->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T3RTQDB');</script>
    <!-- End Google Tag Manager -->
    <script>window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-137157104-1');</script>
    <title><?= Yii::t('app','Urgench state university')?></title>
    <?php $this->head() ?>


</head>
<body>

<?php $this->beginBody() ?>
<?php

$title = 'title_';
$title .= Yii::$app->language;
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
                        <form method="get" id='search' action='/site/search'>
                            <input type="text" name="text" placeholder=<?= Yii::t('app', 'Search') ?>>
                            <button type="submit" class="btn-style"><?= Yii::t('app', 'Search') ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-area -->
    <?= $this->render('_menu') ?>
    <div class="single-service-area ">
        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px;margin-bottom: 0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink' => [
                    'label' => Yii::t('app', 'Home'),
                    'url' => ['site/index']
                ],
            ]) ?>
        </div>

        <?= $content ?>
    </div>




    <!--Start kod Yandex Analytics script -->
    <!-- <script type="text/javascript">
       (function (m, e, t, r, i, k, a) {
           m[i] = m[i] || function () {
               (m[i].a = m[i].a || []).push(arguments)
           };
           m[i].l = 1 * new Date();
           k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
       })
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(55254439, "init", {
           clickmap: true,
           trackLinks: true,
           accurateTrackBounce: true,
           webvisor: true,
           ecommerce: "dataLayer"
       });
   </script> -->
    <!--End kod Yandex Analytics script -->


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

</div>
<?= $this->render('_footer') ?>
<?php $this->endBody(); ?>
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
<?php $this->endPage(); ?>

