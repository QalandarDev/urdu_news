<?php

/* @var $this yii\web\View */
/* @var $grant array */
/* @var $slider \backend\models\News */
/* @var $model1 \backend\models\Events */
/* @var $home string */
/* @var $model \backend\models\News[] */

/* @var $events \backend\models\Events[] */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;

$this->title = Yii::t('app', 'Urgench State University');
//$this->registerCssFile('/owlCarousel/assets/owl.carousel.css');
//$this->registerJsFile()
?>
<style>
    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

</style>
<section class="slider-area">
    <div class="slider-active2 slider-next-prev-style">
<!--        <div class="slider-items">-->
<!--            <img src="/img/sld5.jpg"-->
<!--                 alt="--><?//= Yii::t('app', 'Urgench State University') ?><!--" class="slider">-->
<!--            <div class="slider-content text-center">-->
<!--                <div class="table">-->
<!--                    <div class="table-cell">-->
<!--                        <div class="container">-->
<!--                            <div class="row" style="padding: 10px">-->
<!--                                <div class="col-md-8 col-md-offset-2"-->
<!--                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">-->
<!---->
<!--                                    <h3 style="color: white;font-size: 30px">--><?//= Yii::t('app', 'ADMISSION 2021-2022 CALL-CENTER') ?><!--</h3>-->
<!--                                                                        <a style="color: white;font-size: 18px" id="st"> Abiturenlar uchun 2020-2021 o'quv yili uchun </a><br><br>-->
<!--                                    <ul>-->
<!--                                        <li><a id="st"-->
<!--                                               href="--><?//= Url::to(['/student/call-center']) ?><!--">--><?//= $more[$title] ?><!--</a>-->
<!--                                        </li>-->
<!---->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="slider-items">
            <img src="/img/qaror-706e2d2546.jpg"
                 alt="<?= Yii::t('app', 'Urgench State University') ?>" class="slider">
            <div class="slider-content text-center">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row" style="padding: 10px">
                                <div class="col-md-8 col-md-offset-2"
                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">


                                    <h4 style="color: white;font-size: 32px" id="st"> <?= Yii::t('app','On additional measures to ensure the academic and organizational independence of public higher education institutions')?></h4><br><br>
                                    <ul>
                                        <li><a href="https://urdu.uz/news/1436"><?= $more[$title] ?></a>
                                        </li>

                                    </ul>

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-items">
            <img src="/img/sayt.jpg"
                 alt="<?= Yii::t('app', 'Urgench State University') ?>" class="slider">
            <div class="slider-content text-center">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row" style="padding: 10px">
                                <div class="col-md-8 col-md-offset-2"
                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">

                                    <h4 style="color: white;font-size: 32px" id="st"><?= Yii::t('app', 'The resolution of the President of the Republic of Uzbekistan "On measures to provide financial independence to public higher education institutions" was adopted') ?></h4>
                                  
                                    <ul>
                                        <li><a id="st"
                                               href="https://urdu.uz/news/1435"><?= $more[$title] ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-items">
            <img src="<?= $home ?>/martxa/martxa/assets/images/slider/51F96233685BFC8B1301161433B62D80.jpg"
                 alt="<?= Yii::t('app', 'Urgench State University') ?>" class="slider">
            <div class="slider-content text-center">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row" style="padding: 10px">
                                <div class="col-md-8 col-md-offset-2"
                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">

                                    <h4 style="color: white;"
                                        class="h4"><?= Yii::t('app', 'Methodical recommendations for the review of the projects "State educational standard of higher education. Basic rules" and "State educational standard of higher education. Classifier of directions and specialties of higher education"') ?>
                                        <br><br>
                                        <ul>
                                            <li><a id="st"
                                                   href="https://urdu.uz/news/events?id=166"><?= $all[$title] ?></a>
                                            </li>

                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--div class="slider-items">

            <img src="<?= $home ?>/images/wur.jpg" alt="<?= Yii::t('app', 'Urgench State University') ?>"
                 class="slider">
            <div class="slider-content text-center">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row" style="padding: 10px">
                                <div class="col-md-8 col-md-offset-2"
                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">

                                    <h3 style="color: white;font-size: 30px"><?= Yii::t('app', 'Overall research performance of Urgench State university') ?></h3>

                                    <ul>
                                        <li><a id="st"
                                               href="https://scival.com/overview/summary?uri=Institution/712416">details</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
        <div class="slider-items">

            <img src="<?= $home ?>/martxa/martxa/assets/images/slider/814F06AB7F40B2CFF77F2C7BDFFD3415.jpg"
                 alt="<?= Yii::t('app', 'Urgench State University') ?>" class="slider">
            <div class="slider-content text-center">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row" style="padding: 10px">
                                <div class="col-md-8 col-md-offset-2"
                                     style="background-color: rgba(12, 20, 188, 0.3);padding: 20px;height: 220px">

                                    <h3 style="color: white;font-size: 30px"><?= $grant[$title] ?></h3>
                                    <a style="color: white;font-size: 18px" id="st"> <?= $model3[$title] ?> </a><br><br>
                                    <ul>
                                        <li><a id="st"
                                               href="<?= Url::to(['/site/viewevent?id=2']) ?>"><?= $all[$title] ?></a>
                                        </li>
                                        <li><a href="<?= Url::to(['/site/views?id=' . $model3->id]) ?>"
                                               id="st"><?= $more[$title] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- slider area end -->

<nav class="navbar" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <i class="fa fa-home"></i>
            </a>
        </div>

        <p class="navbar-text"><a href="<?= Url::to(['/news/index']) ?>"
                                  class="navbar-link"><?= Yii::t('app', 'News') ?></a></p>
        <p class="navbar-text"><a href="https://urdu.uz/site/viewcate?id=13" class="navbar-link"><?= Yii::t('app', '5 important initiatives') ?></a></p>
        <p class="navbar-text"><a href="https://urdu.uz/site/viewcate?id=16" class="navbar-link">COVID-19</a></p>
        <p class="navbar-text"><a href="https://urdu.uz/staff"
                                  class="navbar-link"><?= Yii::t('app', 'Employees and Teachers') ?></a></p>
        <p class="navbar-text"><a href="https://urdu.uz/scopus" class="navbar-link"><?= Yii::t('app', 'Scopus') ?></a>
        </p>


    </div>
</nav>

<style>

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }


    .container1:hover .image {
        opacity: 0.6;
    }

    .container1:hover .middle {
        opacity: 0.6;
    }


</style>

<div class="pricing-table-area bg-1 blog-area bg-1" style="">
    <div class="container">
        <div class="row">


            <div class="col-md-8">
                <div class="page-header"><h2 class="h1-text"><?= $titlelang[$title] ?></h2></div>
                <div class="row">

                    <?php foreach ($model as $item) { ?>

                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <a style="font-family: 'Open Sans',Verdana;font-size: 14px"
                               href="<?= Url::to(['news/index', 'id' => $item->id]) ?>">
                                <img src="<?php if (!empty($item->img)) echo $item->img; else echo "$home/img/urdu_log.png"; ?>"
                                     alt="<?= $item->title ?>"
                                     style="height: 300px; object-fit:cover; border-radius: 8px 8px 0 0;"
                                     class="image"/>
                            </a>
                            <p style="height: 110px; background-color:white; padding: 6px; border-radius: 0 0 8px 8px;">
                                <a style="font-family: 'Open Sans',Verdana;font-size: 14px"
                                   href="<?= Url::to(['/news/index', 'id' => $item->id]) ?>">
                                    <?= mb_substr($item[$title], 0, 120) ?>
                                </a>
                                <br>
                                <small><i class="fa fa-calendar"></i> <?= $item['date'] ?></small>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
<!--                <div class="single-sidebar-widget" style="margin-top: 30px; margin-bottom: 170px;">-->
<!--                    <div style="width: 400px; height: 70px; margin: 0 auto; display: block;margin: 0 auto;" class="strategy-gov">-->
<!--                        <a href="#" rel="alternate">-->
<!--                            <img class=" boott" src="/media/banner/cR3i8bZ7myFt3fWSoIXN5F_zMXFj_cU8.gif">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="page-header"><h2 class="h1-text"><?= $titlelangev[$title] ?></h2></div>
                <?php foreach ($events as $item) { ?>
                    <div class="row">
                        <div class="col-md-3" style="border-right: 2px solid;">
                            <p style="font-family: 'Open Sans',Verdana;font-size: 19px">
                                <b><?= mb_substr($item['date'], 0, 10) ?></b></p>
                        </div>
                        <div class="col-md-9">
                            <p><a style="font-family: 'Open Sans',Verdana;font-size: 14px"
                                  href="<?= Url::to(['/news/events', 'id' => $item->id]) ?>"><?= mb_substr($item[$title], 0, 150) ?></a>
                            </p>

                        </div>
                    </div>
                    <hr>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php
$talabax =Yii::t('app','Foreign students');
$talabao = Yii::t('app','Teachers');
$talabay = Yii::t('app','Directions');
?>
<!--<section class="container">-->


<div class="owl-carousel owl-theme" id="carousel_partners">

    <div class="slider partner-slide" style="background-image: url('/partners/alfarabi.jpg'); ">
        <h2 class="slide_title">Al-Farabi Kazakh National University</h2>
        <a class="btn btn-info slide_link" href=" https://www.kaznu.kz/en" role="button">Info</a>
    </div>

    <div class="slider partner-slide" style="background-image: url('/partners/ankara.jpg');">
        <h2 class="slide_title">Ankara University</h2>
        <a class="btn btn-info slide_link" href="https://en.ankara.edu.tr/" role="button">Info</a>
    </div>
    <div class="slider partner-slide" style="background-image: url('/partners/belarus.jpg');">

        <h2 class="slide_title">Belarusian State Technological University</h2>
        <a class="btn btn-info slide_link" href="https://en.belstu.by/"  role="button">Info</a>
    </div>
    <div class="slider partner-slide" style="background-image: url('/partners/partner.jpg');">

<!--        <h2 class="slide_title">Partner Universities</h2>-->
        <a class="btn btn-info slide_link" href="https://www.urdu.uz/"  role="button">Info</a>
    </div>
    <div class="slider partner-slide" style="background-image: url('/partners/california.jpg');">
        <h2 class="slide_title">California State University, Fullerton</h2>
        <a class="btn btn-info slide_link" href="https://www.fullerton.edu/" role="button">Info</a>
    </div>
    <div class="slider partner-slide" style="background-image: url('/partners/pisa.jpg');">
        <h2 class="slide_title">University of Pisa  </h2>
        <a class="btn btn-info slide_link" href=" https://www.unipi.it/" role="button">Info</a>
    </div>

    <div class="slider partner-slide" style="background-image: url('/partners/porto.jpg');">
        <h2 class="slide_title">University Of Porto</h2>
        <a class="btn btn-info slide_link" href="https://sigarra.up.pt/up/pt/web_base.gera_pagina?p_pagina=home" role="button">Info</a>
    </div>
</div>

<br>
<!--</section>-->
<!--owl-corusel end-->
<!--<div class="owl-carousel owl-theme">-->
<!--    <div class="item"><h4>1</h4></div>-->
<!--    <div class="item"><h4>2</h4></div>-->
<!--    <div class="item"><h4>3</h4></div>-->
<!--    <div class="item"><h4>4</h4></div>-->
<!--    <div class="item"><h4>5</h4></div>-->
<!--    <div class="item"><h4>6</h4></div>-->
<!--    <div class="item"><h4>7</h4></div>-->
<!--    <div class="item"><h4>8</h4></div>-->
<!--    <div class="item"><h4>9</h4></div>-->
<!--    <div class="item"><h4>10</h4></div>-->
<!--    <div class="item"><h4>11</h4></div>-->
<!--    <div class="item"><h4>12</h4></div>-->
<!--</div>-->
<?php
$css = <<<CSS
.partner-slide{
height: 256px;
background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.slide_title {
text-shadow: rgb(0, 0, 0) 3px 0px 0px, rgb(0, 0, 0) 2.83487px 0.981584px 0px, rgb(0, 0, 0) 2.35766px 1.85511px 0px, rgb(0, 0, 0) 1.62091px 2.52441px 0px, rgb(0, 0, 0) 0.705713px 2.91581px 0px, rgb(0, 0, 0) -0.287171px 2.98622px 0px, rgb(0, 0, 0) -1.24844px 2.72789px 0px, rgb(0, 0, 0) -2.07227px 2.16926px 0px, rgb(0, 0, 0) -2.66798px 1.37182px 0px, rgb(0, 0, 0) -2.96998px 0.42336px 0px, rgb(0, 0, 0) -2.94502px -0.571704px 0px, rgb(0, 0, 0) -2.59586px -1.50383px 0px, rgb(0, 0, 0) -1.96093px -2.27041px 0px, rgb(0, 0, 0) -1.11013px -2.78704px 0px, rgb(0, 0, 0) -0.137119px -2.99686px 0px, rgb(0, 0, 0) 0.850987px -2.87677px 0px, rgb(0, 0, 0) 1.74541px -2.43999px 0px, rgb(0, 0, 0) 2.44769px -1.73459px 0px, rgb(0, 0, 0) 2.88051px -0.838247px 0px;
  font-family: "Times New Roman";
  text-align: center;
  position: absolute;
  font-size: 2rem;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:white;
  border-color: black;
  
}
.slide_link{
  text-align: center;
  position: absolute;
  
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
CSS;
$this->registerCss($css);
$script = <<<JS
$('#carousel_partners').owlCarousel({
    loop:true,
    stagePadding:50,
    margin:10,
    // nav:true,
    dots: false,
    autoplayTimeout:3000,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
JS;
$this->registerJs($script);

?>
<!-- video-area start -->
<section class="video-area  parallax black-opacity wow fadeInUp" style="height:300px" data-speed="5"
         data-bg-image="<? //= $home ?>/martxa/martxa/assets/images/slider/51F96233685BFC8B1301161433B62D80.jpg">
    <h2 class="hidden">Video area</h2>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="video-wrap text-center">
                            <a href="https://mover.uz/video/embed/uyVXF4Dm/" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php Modal::begin([
    'id' => "telegram_join_ilova",
    'size' => Modal::SIZE_SMALL,

]); ?>

<div class="row" style="padding: 10px; border-radius: 10px; ">
    <div class="col-md-12 ilova">
        <!--<img height="50px" src="<?= $home ?>/img/telegram.png" alt=""><br><br>-->
        <!--        <h5>Abiturentlar uchun ijodiy imtihonlar bo'limi</h5>-->
        <!--        <a href="-->
        <?php //=Url::to(['/site/active','id'=>92])?><!--" class="btn btn-success" style="border-radius: 10px;">-->
        <!--		Ijodiy imtihonlar-->
        <!--		</a>-->
        <h5>Abituriyentlar uchun Test sinovlar natijalari</h5>
        <tr>
            <td>
                <a href="<?= Url::to(['/mandat/index']) ?>" class="btn btn-success" style="border-radius: 10px;">
                    Bakalavr
                </a>
            </td>
            <td>
                <a href="<?= Url::to(['/student/magistr-mandat']) ?>" class="btn btn-success"
                   style="border-radius: 10px;">
                    Magistratura
                </a>
            </td>

        </tr>
        <hr>
        <h5>Talabalar uchun o'qishni ko'chirish bo'limi</h5>
        <a href="<?= Url::to(['/transfer/index']) ?>" class="btn btn-success" style="border-radius: 10px;">
            Respublika OTMlaridan
        </a>
        <hr>
        <a href="<?= Url::to(['/transfer/xorijiy']) ?>" class="btn btn-success" style="border-radius: 10px;">
            Xorijiy OTMlardan
        </a>
        <hr>
        <a href="<?= Url::to(['/site/active', 'id' => 112]) ?>" class="btn btn-success" style="border-radius: 10px;">
            5 yil stajli qabul
        </a>


    </div>
</div>
<?php Modal::end();
//$js=<<<JS
//$('document').ready(function() {
//  setTimeout(function() {
//    $('#telegram_join_ilova').modal('show')
//  },3000);
//});
//JS;
//$this->registerJs($js)
?>

<style>


    /* Demo Purpose Only*/
    .demo {
        font-family: 'Raleway', sans-serif;
        color: #fff;
        display: block;
        margin: 0 auto;
        padding: 15px 0;
        text-align: center;
    }

    .demo a {
        font-family: 'Raleway', sans-serif;
        color: #000;
    }
</style>

<!-- newsletter-area end -->
<script src="<?= $home ?>/martxa/martxa/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->

<script src="<?= $home ?>/martxa/martxa/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="<?= $home ?>/martxa/martxa/assets/js/owl.carousel.min.js"></script>
<!-- counterup.main.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/counterup.main.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/isotope.pkgd.min.js"></script>
<!-- jquery.waypoints.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/jquery.waypoints.min.js"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/jquery.magnific-popup.min.js"></script>
<!-- jquery.slicknav.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/jquery.slicknav.min.js"></script>
<!-- snake.min.js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/snake.min.js"></script>
<!-- wow js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/plugins.js"></script>
<!-- main js -->
<script src="<?= $home ?>/martxa/martxa/assets/js/scripts.js"></script>

<style>
    #st {

        font-family: Arial;
        font-size: 13px;
    }

    #h {

        font-family: Georgia;
        font-size: 20px;
        color: #2780e3;

    }

</style>
