<?php


/**
 * @var $this View
 * @var $events Events[]
 * @var $event Events
 */

use frontend\models\Events;
use yii\web\View;

?>
<div class="rs-event modify2  pt-4 pb-4 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title pb-4 text-center">
            <h2 class="title mb-0 "><?= Yii::t('news', "Events") ?></h2>
        </div>
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-lg-4 pb-2 col-md-6">
                    <div class="event-item">
                        <div class="event-short">
                            <div class="featured-img">
                                <img src="<?= Yii::getAlias('@web') . '/img/event.webp' ?>" alt="Image">
                            </div>
                            <div class="content-part">
                                <div class="title">
                                    <a href="<?=\yii\helpers\Url::to(['events/view','id'=>$event->id]) ?>">
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
