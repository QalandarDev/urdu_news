<?php

/* @var $this yii\web\View */
/* @var $home string */
/* @var $model News[] */

/* @var $events Events[] */

use dominus77\owlcarousel2\Carousel;
use frontend\models\Events;
use frontend\models\News;
use frontend\widgets\AboutWidget;
use frontend\widgets\EventsWidget;
use frontend\widgets\GraduateWidget;
use frontend\widgets\NewsWidget;
use frontend\widgets\PartnersWidget;

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

<?php
try {
    echo AboutWidget::widget();
} catch (Throwable $e) {
    echo $e->getMessage();
}
?>
<!--graduate area-->
<?php
try {
    echo GraduateWidget::widget();
} catch (Throwable $e) {
}
?>
<!--news area-->
<?php
try {
    echo NewsWidget::widget();
} catch (Throwable $e) {
    echo $e->getMessage();
}
?>
<!--Events-->
<?php
try {
    echo EventsWidget::widget();
} catch (Throwable $e) {
    echo $e->getMessage();
}
?>
<!-- Event Area End -->
<!--Partners Area Start-->
<?php
try {
    echo PartnersWidget::widget();
} catch (Throwable $e) {
    echo $e->getMessage();
}
?>
<!--Partners Area End-->