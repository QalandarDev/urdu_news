<?php


/* @var $this \yii\web\View */
/* @var $page \Page|null */
$this->title = $page->title;
?>
<div class="rs-inner-blog pt-10 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="blog-deatails">
            <h2 class="title text-center pt-30"><?=$page->title?></h2>
            <div class="blog-full">
                <ul class="single-post-meta text-center">
                    <li>
                        <span class="p-date"> <i class="fal fa-calendar"></i> <?= $page->date ?></span>
                    </li>
                    <li>
                        <span class="p-date"> <i class="fal fa-user"></i><?= Yii::t('news', "RTTM") ?></span>
                    </li>
                </ul>
                <div class="blog-desc">
                    <?= $page->text ?>
                </div>
            </div>
        </div>

    </div>
</div>
