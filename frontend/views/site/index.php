<?php

/* @var $this yii\web\View */
/* @var $home string */
/* @var $model News[] */

/* @var $events Events[] */

use common\helpers\TextHelper;
use dominus77\owlcarousel2\Carousel;
use frontend\models\Events;
use frontend\models\News;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->registerMetaTag(
    [
        'name' => 'description',
        'content' => 'Urganch State University, Urganch, Uzbekistan, News, Events'
    ]
);
$this->title = Yii::t('news', 'Urgench State University');
?>
<div class="rs-slider style1">
    <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="1" data-margin="0"
         data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
         data-dots="true" data-nav="false" data-nav-speed="true" data-center-mode="false" data-mobile-device="1"
         data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
         data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
         data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
        <?php Carousel::begin(
            [
                'clientOptions' => [
                    'loop' => true,
                    'margin' => 10,
                    'responsiveClass' => true,
                    'responsive' => [
                        0 => [
                            'items' => 1,
                        ],
                        600 => [
                            'items' => 3,
                            'loop' => true
                        ],
                        1000 => [
                            'items' => 5,
                            'loop' => true,
                        ],
                    ],
                ],
            ]
        ) ?>
        <div class="slider-content slide1"
             style="background: url('<?= Yii::getAlias('@web') . '/img/carousel/1.webp' ?>'">
            <div class="container">
                <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: bounceInLeft;">
                    <?= Yii::t('news',"Urgench State University") ?>
                </div>
                <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"
                    style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInRight;">
                    <?= Yii::t('news', "Urgench State University") ?>
                </h1>
                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 900ms; animation-name: fadeInUp;">
                    <a class="readon2 banner-style" href="#">Discover More</a>
                </div>
            </div>
        </div>
        <div class="slider-content slide2"
             style="background-size: cover; background: url('<?= Yii::getAlias('@web') . '/img/carousel/2.webp' ?>'">
            <div class="container">
                <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: bounceInLeft;">
                    <?= Yii::t('news',"Urgench State University") ?>
                </div>
                <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"
                    style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInRight;">
                    <?= Yii::t('news', "Urgench State University") ?>
                </h1>
                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 900ms; animation-name: fadeInUp;">
                    <a class="readon2 banner-style" href="#">Discover More</a>
                </div>
            </div>
        </div>
        <?php Carousel::end() ?>
    </div>
</div>
<div class="rs-services style1">

</div>
<div id="rs-about" class="rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pr-65 md-pr-15 md-mb-50"
                 data-bg-image="">
                <div class="about-intro" style="background: url('<?= Yii::getAlias('@web') . '/img/about_bg.webp' ?>')">
                    <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                         style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="sub-title primary">About Educavo</div>
                        <h2 class="title mb-21 white-color">Welcome to Educavo University</h2>
                        <div class="desc big white-color">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed
                            eius to mod tempors incididunt ut labore et dolore magna this aliqua enims ad minim.
                        </div>
                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
                         style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <a class="readon2" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 lg-pl-0 ml--25 md-ml-0">
                <div class="row rs-counter counter-area mb-40">
                    <div class="col-md-4">
                        <div class="counter-item one">
                            <div class="number rs-count kplus">41</div>
                            <div class="title mb-0"><?= Yii::t('news', "Number of students") ?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-item two">
                            <div class="number rs-count">3.50</div>
                            <div class="title mb-0">Average CGPA</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-item three">
                            <div class="number rs-count percent">95</div>
                            <div class="title mb-0">Graduates</div>
                        </div>
                    </div>
                </div>
                <div class="row grid-area">
                    <div class="col-md-6 sm-mb-30">
                        <div class="image-grid">
                            <img src="<?= Yii::getAlias('@web') . '/img/about1.webp' ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-grid">
                            <img src="<?= Yii::getAlias('@web') . '/img/about2.webp' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--graduate area-->
<div class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="sub-title primary">
                        <?= Yii::t('news', "Education types") ?>
                    </div>
                    <h2 class="title mb-0">
                        <?= Yii::t('news', "Urgench State University education types") ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/1.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "Bachelor's degree") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Bachelor's degree") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "State educational standard"), ['page/view', 'id' => 31]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Normative legal act"), ['page/view', 'id' => 95]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Schedule of the educational process"), ['page/view', 'id' => 144]) ?>
                            <br>
                        </p>
                        <div class="btn-part">
                            <?= Html::a(Yii::t('news', "Curriculum catalog"), ['page/view', 'id' => 145]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/2.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">

                            <?= Yii::t('news', "Master's degree") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Master's degree") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', 'Instruction'), ['page/view', 'id' => 30]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Grade performance"), ['page/view', 'id' => 87]) ?>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/3.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "Doctorate") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Doctorate") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "Entrance Test Questions"), ['page/view', 'id' => 234]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Results of entrance examinations"), ['page/view', 'id' => 169]) ?>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/4.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "International students") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "International students") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "Admission"), ['page/view', 'id' => 48]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Security"), ['page/view', 'id' => 49]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Dormitory"), ['page/view', 'id' => 50]) ?>
                            <br>
                        </p>
                        <div class="btn-part">
                            <?= Html::a(Yii::t('news', "Read All"), ['applicant/international-student']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/5.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">PHD Scholarships</div>
                    </div>
                    <div class="content-part">
                        <div class="title"><a href="#">PHD Scholarships</a></div>
                        <p class="desc">Nam libero temporal, cum solute nobs est diligent option cumquat nil impeded quo
                            minus id quod </p>
                        <div class="btn-part">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--news area-->
<div class="gray-bg">
    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="sec-title mb-60 text-center">
                <h2 class="title mb-0 "><?= Yii::t('news', "Latest News") ?></h2>
            </div>
            <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="3" data-margin="30"
                 data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                 data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false"
                 data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                 data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                 data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                 data-md-device-nav="true" data-md-device-dots="false">
                <?php Carousel::begin(
                    [
                        'clientOptions' => [
                            'loop' => true,
                            'margin' => 10,
                            'responsiveClass' => true,
                            'responsive' => [
                                0 => [
                                    'items' => 1,
                                    'nav' => true,
                                ],
                                600 => [
                                    'items' => 3,
                                    'nav' => false,
                                    'loop' => true
                                ],
                                1000 => [
                                    'items' => 3,
                                    'nav' => true,
                                    'loop' => true,
                                ],
                            ],
                        ],
                    ]
                ) ?>
                <?php foreach ($model as $news): ?>
                    <div class="item blog-item">
                        <div class="image-part">
                            <img src="<?= $news->img ?>" alt="<?= $news->title ?>">
                        </div>
                        <div class="blog-content new-style">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user-o"></i> Admin</li>
                                <li><i class="fa fa-calendar"></i><?= $news->date ?></li>
                            </ul>
                            <h3 class="title"><a
                                        href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>"><?= $news->title ?></a>
                            </h3>
                            <div class="desc">
                                <?= mb_substr(strip_tags($news->title), 0, 150) ?>
                            </div>
                            <ul class="blog-bottom">
                                <li class="btn-part">
                                    <a class="" href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>">
                                        <?= TextHelper::readMore()?>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php Carousel::end() ?>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
</div>
<!--Events-->
<div class="rs-event modify2 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title mb-60 text-center">
            <h2 class="title mb-0 "><?= Yii::t('news', "Events") ?></h2>
        </div>
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="event-item">
                        <div class="event-short">
                            <div class="featured-img">
                                <img src="<?= Yii::getAlias('@web') . '/img/event.webp' ?>" alt="Image">
                            </div>
                            <div class="content-part">
                                <div class="title">
                                    <a href="#">
                                        <?= $event->title ?>
                                    </a>
                                </div>
                                <div class="address">
                                    <i class="fal fa-map-marker-check"></i>
                                    <?= $event->location ?>
                                </div>
                                <div class="date-part">
                                    <div class="date">
                                        <i class="fal fa-calendar-check"></i>
                                        <?= $event['date'] ?>
                                    </div>
                                </div>
                                <div class="time">
                                    <i class="fal fa-clock"></i>
                                    11:00 AM - 03:00 AM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Event Area End -->
<!--Partners Area Start-->
<div class="rs-partner pb-100 md-pb-70">
    <div class="container">
        <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="4" data-margin="30"
             data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
             data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
             data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
             data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
             data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
             data-md-device-dots="false">
            <?php Carousel::begin(
                [
                    'clientOptions' => [
                        'loop' => true,
                        'margin' => 10,
                        'responsiveClass' => true,
                        'responsive' => [
                            0 => [
                                'items' => 1,
                                'loop' => true
                            ],
                            600 => [
                                'items' => 3,
                                'loop' => true
                            ],
                            1000 => [
                                'items' => 3,
                                'loop' => true,
                            ],
                        ],
                    ],
                ]
            ) ?>
            <a href="https://kaznu.kz/en/">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/alfarabi.webp' ?>"
                     alt="AL-FARABI KAZAKH NATIONAL UNIVERSITY"
                     title="AL-FARABI KAZAKH NATIONAL UNIVERSITY"
                     style="width: 100%; height: 100%;">
            </a>
            <a href="https://ankara.edu.tr//en/">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/ankara.webp' ?>"
                     alt="ANKARA UNIVERSITY"
                     title="ANKARA UNIVERSITY">
            </a>
            <a href="https://belstu.by/">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/belarus.webp' ?>"
                     alt="Белорусский государственный технологический университет"
                     title="Белорусский государственный технологический университет"
                     style="width: 100%; height: 100%;">
            </a>
            <a href="https://fullerton.edu">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/california.webp' ?>"
                     alt="California State University, Fullerton"
                     title="California State University, Fullerton"
                     style="width: 100%; height: 100%;">
            </a>
            <a href="https://unipi.it/">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/pisa.webp' ?>"
                     alt="Università di Pisa"
                     title="Università di Pisa"
                     style="width: 100%; height: 100%;">
            </a>
            <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/img/partners/porto.webp' ?>"
                     alt="Porto University"
                     title="Porto University"
                     style="width: 100%; height: 100%;">
            </a>
        </div>
    </div>
</div>
<!--Partners Area End-->