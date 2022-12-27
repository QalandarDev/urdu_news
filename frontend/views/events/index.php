<?php


/**
 * @var $this \yii\web\View
 * @var $events \backend\models\Events[]
 * @var $event \backend\models\Events
 * @var $pagination \common\helpers\Pagination
 */

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

?>

<div class="rs-event modify1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="event-item">
                        <div class="event-short">
                            <div class="featured-img">
                                <img src="<?= Yii::getAlias('@web') . '/img/event.png' ?>" alt="Image">
                                <div class="dates">
                                    <?= date('d.m.Y', strtotime($event->date)) ?>
                                </div>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a
                                            href="<?= Url::to(['events/view', 'id' => $event->id]) ?>"><?= $event->title ?></a>
                                </h4>
                                <div class="time-sec">
                                    <div class="timesec"><i class="fa fa-clock-o"></i> 11:00 AM -
                                        03:00 AM
                                    </div>
                                    <div class="address"><i class="fa fa-map-o"></i> <?= $event->location ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col pagination-area">
                <?= LinkPager::widget(
                    [
                        'pagination' => $pagination,
                    ]
                ) ?>
            </div>
        </div>
    </div>
</div>
