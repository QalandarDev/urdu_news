<?php


/**
 * @var $this View
 * @var $centers array|Center[]|ActiveRecord[]
 * @var $center Center
 */


use backend\models\Center;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use yii\web\View;
$this->title= Yii::t('app','Centres and departments');
?>
<div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($centers as $center): ?>
                <div class="col-lg-4 mb-30 col-md-6">
                    <a href="<?= Url::to(['center/view', 'id' => $center->id]) ?>">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $center->image??Yii::getAlias('@web') . '/img/urdu_log.png' ?>" alt="">
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
