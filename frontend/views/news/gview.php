</div>
<?php

/* @var $this yii\web\View */
/* @var $model \backend\models\Galery[] */
/* @var $pages \yii\data\Pagination */
/* @var $home string */


$this->title = Yii::t('app', 'Urgench State University');
?>

<div class="container">

    <h1><?= Yii::t('app', 'Photo gallery') ?></h1>

    <div class="tz-gallery">

        <div class="row">
            <?php foreach ($model as $item) :?>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?=$home?>/images/gallery/<?= $item->img ?>">
                    <img src="<?=$home?>/images/gallery/thumb/<?= $item->image_cat ?>" alt="Park">
                </a>
            </div>
            <?php endforeach; ?>

        </div>

    </div>

</div>

<!-- video-area start -->
<section class="video-area  parallax black-opacity wow fadeInUp" data-speed="5"
         data-bg-image="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/images/slider/newsmall.jpg">
    <h2 class="hidden">Video area</h2>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="video-wrap text-center">
                            <a href="<?= Yii::$app->request->baseUrl ?>/vidio/vidio.mp4" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<script>
    baguetteBox.run('.tz-gallery');
</script>
<div role="dialog" id="baguetteBox-overlay"><div id="baguetteBox-slider"></div><button type="button" id="previous-button" aria-label="Previous" class="baguetteBox-button"><svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg></button><button type="button" id="next-button" aria-label="Next" class="baguetteBox-button"><svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg></button><button type="button" id="close-button" aria-label="Close" class="baguetteBox-button"><svg width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"></line><line x1="5" y1="25" x2="25" y2="5"></line></g></svg></button></div>
























