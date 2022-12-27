<?php


/* @var $this \yii\web\View */
/* @var $centers array|\backend\models\Center[]|\yii\db\ActiveRecord[] */

/* @var $center \backend\models\Center */

use yii\helpers\Url;

?>
<div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($centers as $center): ?>
                <div class="col-lg-4 mb-30 col-md-6">
                    <a href="<?= Url::to(['page/faculty', 'id' => $center->id]) ?>">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= Yii::getAlias('@web') . '/img/urdu_log.png' ?>" alt="">
                            </div>
                            <div class="title">
                                <?= $center->name ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
