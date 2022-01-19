<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

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

$title = "title_";
$title .= Yii::$app->language;
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
    <!-- heared area start -->
    <?= $this->render('_menu') ?>
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
        $url = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
        $havola = Yii::t('app', 'Quick links');
        $centers = \backend\models\Center::find()->where(['cate' => 1])->all();
        $bulim = Yii::t('app', 'Faculties');

        $home = Yii::t('app', 'Home');
        $news = Yii::t('app', 'News');
        $events = Yii::t('app', 'Events');
        $tuzilma = Yii::t('app', 'Structure');
        $univer = Yii::t('app', 'History of University');
        $nizom = Yii::t('app', 'Regulation of University');
        $rektorat = Yii::t('app', 'Rectorate');
        $faculty = Yii::t('app', 'Faculties');
        $department = Yii::t('app', 'Departments');
        $center = Yii::t('app', 'Centers and departments');
        ?>
        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="mobile">
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a
                                            style="color: black;background-color:rgba(146, 173, 255, 0.05);"><b><?= $tuzilma ?></b></a>
                                </li>
                                <li <?php if ($url == "site/about") {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/about']) ?>"><?= $univer ?></a></li>
                                <li <?php if ($url == "site/nizom" ) {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/nizom']) ?>"><?= $nizom ?></a></li>
                                <li <?php if ($url == "/frontend/web/uz/site/rektorat" || $url == "/frontend/web/site/rektorat" || $url == "/frontend/web/ru/site/rektorat") {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/rektorat']) ?>"><?= $rektorat ?></a></li>
                                <li <?php if ($url == "/frontend/web/uz/site/events" || $url == "/frontend/web/site/events" || $url == "/frontend/web/ru/site/events") {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/faculty']) ?>"><?= $faculty ?></a></li>
                                <li <?php if ($url == "/frontend/web/uz/site/events" || $url == "/frontend/web/site/events" || $url == "/frontend/web/ru/site/events") {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/department']) ?>"><?= $department ?></a>
                                </li>
                                <li <?php if ($url == "/frontend/web/uz/site/events" || $url == "/frontend/web/site/events" || $url == "/frontend/web/ru/site/events") {
                                    echo "class=\"active\"";
                                } ?>><a href="<?= Url::to(['/site/center']) ?>"><?= $center ?></a></li>

                            </ul>
                        </div>

                    </aside>

                </div>
                <div class="col-md-9">

                    <?= Alert::widget() ?>
                    <?= $content ?>

                </div>

            </div>
        </div>
    </div>


</div>

<?= $this->render('_footer'); ?>
<!--<footer>-->
<!--    <div class="footer-top">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">-->
<!--                    <div class="footer-widget footer-logo">-->
<!--                        --><?php
//                        $ursu = Yii::t('app','Urgench State University');
//                        $ursumanzil = Yii::t('app','Urgench State University');
//                        ?>
<!--                        <h4 style="color: white">--><? //=$ursu?><!--</h4>-->
<!--                        <p> 14, Kh.Alimdjan str, Urgench city,-->
<!--                            220100, Uzbekistan</p>-->
<!--                        <ul>-->
<!--                            <li><i class="fa fa-phone"></i> +998 62 224 6700</li>-->
<!--                            <li><i class="fa fa-envelope"></i>  info@urdu.uz</li>-->
<!--                            <li><i class="fa fa-bus"></i> Bus 7,13,28</li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">-->
<!--                    <div class="footer-widget footer-menu">-->
<!--                        <h2>--><? //=$tuzilma?><!--</h2>-->
<!--                        <ul>-->
<!--                                   		<li><a href="--><? //=\yii\helpers\Url::to(['/site/about'])?><!--">-->
<? //=$univer?><!--</a></li>-->
<!--                                        <li><a href="--><? //=\yii\helpers\Url::to(['/site/nizom'])?><!--">-->
<? //=$nizom?><!--</a></li>-->
<!--                                        <li><a href="--><? //=\yii\helpers\Url::to(['/site/rektorat'])?><!--">-->
<? //=$rektorat?><!--</a></li>-->
<!--                                        <li><a href="--><? //=\yii\helpers\Url::to(['/site/faculty'])?><!--">-->
<? //=$faculty?><!--</a></li>-->
<!--                                        <li><a href="--><? //=\yii\helpers\Url::to(['/site/department'])?><!--">-->
<? //=$department?><!--</a></li>-->
<!--                                        <li><a href="--><? //=\yii\helpers\Url::to(['/site/center'])?><!--">-->
<? //=$center?><!--</a></li>-->
<!--                        -->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">-->
<!--                    <div class="footer-widget footer-menu">-->
<!--                        <h2>--><? //=$xorijiy?><!--</h2>-->
<!--                        <ul>-->
<!--                          --><?php //foreach ($xorijiyt as $mag){?>
<!--                                        <li><a href="-->
<? //=\yii\helpers\Url::to(['/site/active?id='.$mag->id])?><!--">--><? //=$mag[$title]?><!--</a></li>-->
<!--                                        --><?php //}?>
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">-->
<!--                    <div class="footer-widget quick-contact">-->
<!--                        <h2>Quick Contact</h2>-->
<!--                        <form action="#">-->
<!--                            <input type="text" placeholder="Full Name">-->
<!--                            <input type="email" placeholder="Email">-->
<!--                            <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Massage"></textarea>-->
<!--                            <button type="button" name="button" class="btn-style">Send</button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="footer-bottom text-center">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--               <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--                    Copyright UrSU &copy;<script>document.write(new Date().getFullYear());</script>-->
<!--                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--                </div>-->
<!--				<div class="col-md-6" style="text-align:right">-->
<!--				<SCRIPT language="javascript" type="text/javascript">-->
<!--                            <!---->
<!--                                top_js="1.0";top_r="id=29603&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")-->
<!--                                //-->-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.1" type="text/javascript">-->
<!--                                <!---->
<!--                                    top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")-->
<!--                                    //-->-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.2" type="text/javascript">-->
<!--                                <!---->
<!--                                    top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+-->
<!--                                        (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)-->
<!--                                    //-->-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.3" type="text/javascript">-->
<!--                                <!---->
<!--                                    top_js="1.3";-->
<!--                                //-->-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="JavaScript" type="text/javascript">-->
<!--                                <!---->
<!--                                    top_rat="&col=0063AF&t=ffffff&p=DD7900";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top></a>')//-->
-->
<!--                            </SCRIPT><NOSCRIPT><a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top><IMG height=31 src="http://www.uz/plugins/top_rating/count/nojs_cnt.png?id=29603&pg=http%3A//urdu.uz&col=0063AF&t=ffffff&p=DD7900" width=88 border=0 alt="Топ рейтинг www.uz"></a>-->
<!--                            -->
<!--                            </NOSCRIPT><!-- FINISH WWW.UZ TOP-RATING --> -->
<!--                <!-- Yandex.Metrika informer -->-->
<!--<a href="https://metrika.yandex.com/stat/?id=55254439&amp;from=informer"-->
<!--target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55254439/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"-->
<!--style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="55254439" data-lang="ru" /></a>-->
<!--<!-- Yandex.Metrika counter -->-->
<!--<script type="text/javascript" >-->
<!--   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};-->
<!--   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})-->
<!--   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");-->
<!---->
<!--   ym(55254439, "init", {-->
<!--        clickmap:true,-->
<!--        trackLinks:true,-->
<!--        accurateTrackBounce:true,-->
<!--        webvisor:true,-->
<!--        ecommerce:"dataLayer"-->
<!--   });-->
<!--</script>-->
<!--<noscript><div><img src="https://mc.yandex.ru/watch/55254439" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!--<!-- /Yandex.Metrika counter -->-->
<!--				</div>-->
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

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
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->

<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/owl.carousel.min.js"></script>
<!-- counterup.main.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/counterup.main.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/isotope.pkgd.min.js"></script>
<!-- jquery.waypoints.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.waypoints.min.js"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.magnific-popup.min.js"></script>
<!-- jquery.slicknav.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.slicknav.min.js"></script>
<!-- snake.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/snake.min.js"></script>
<!-- wow js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/plugins.js"></script>
<!-- main js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/scripts.js"></script>

