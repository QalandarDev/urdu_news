<?php

use common\helpers\TextHelper;
use frontend\models\News;
use yii\bootstrap5\Carousel;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use yii\web\View;



/* @var $this View */
/* @var $model array|News[]|ActiveRecord[] */
?>

<div class="gray-bg">
    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog style2 pt-4 pb-5 pt-md-3 pb-md-4">
        <div class="container">
            <div class="sec-title mb-4  text-center">
                <h2 class="title mb-0 "><?= Yii::t('news', "Latest News") ?></h2>
            </div>
            <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="3" data-margin="30"
                 data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                 data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
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
                                    'nav' => false,
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