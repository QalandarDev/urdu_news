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
</body>
</html>
<?php $this->endPage(); ?>

