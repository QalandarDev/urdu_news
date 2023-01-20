<?php


/* @var $this \yii\web\View */

use yii\bootstrap5\Carousel;

?>
<div class="rs-partner p-3">
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
