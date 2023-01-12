<?php


/**
 * @var $this View
 * @var $faculties Faculty[]
 * @var $faculty Faculty
 */

use frontend\models\Faculty;
use yii\helpers\Url;
use yii\web\View;

?>
<div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($faculties as $faculty): ?>
                <div class="col-lg-4 mb-30 col-md-6">
                    <a href="<?= Url::to(['faculty/view', 'id' => $faculty->id]) ?>">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= Yii::getAlias('@web') . '/img/urdu_log.png' ?>" alt="">
                            </div>
                            <div class="title">
                                <?= $faculty->name ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
