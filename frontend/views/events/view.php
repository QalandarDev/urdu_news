<?php


/* @var $this \yii\web\View */
/* @var $event \backend\models\Events|null */
?>

<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="<?= Yii::getAlias('@web') . '/img/services/2.png' ?>" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title"><?= $event->title ?></h1>
        <ul>
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li><?= $event->title ?></li>
        </ul>
    </div>
</div>
<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="blog-deatails">
            <div class="bs-img">
                <a href="#"><img src="<?= $event->img ?? Yii::getAlias('@web') . '/img/event1.png' ?>" alt=""></a>
            </div>
            <div class="blog-full">
                <ul class="single-post-meta">
                    <li>
                        <span class="p-date"> <i class="fa fa-calendar-check-o"></i> <?= $event->date ?> </span>
                    </li>
                    <li>
                        <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                    </li>
                </ul>
                <div class="blog-desc mb-40">
                    <?= $event->text ?>
                </div>
            </div>
        </div>
    </div>
</div>
