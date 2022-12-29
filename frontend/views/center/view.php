<?php

/* @var $teams \backend\models\Hodim[] */
/* @var $team \backend\models\Hodim */
/* @var $this \yii\web\View */

/* @var $center \backend\models\Center|null */

use yii\helpers\Url;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <div id="rs-team"
                     class="rs-team style1 inner-style pt-30 pb-100 md-pt-64 md-pb-70 gray-bg">
                    <div class="container">
                        <div class="sec-title mb-30 md-mb-30 text-center">
                            <h2 class="title mb-0"><?= Yii::t('news', 'Employees') ?></h2>
                        </div>
                        <div class="row">
                            <?php foreach ($teams as $team): ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="team-item">
                                        <img src="<?= "https://urdu.uz/hodimlar/" . $team->img ?>" alt="">
                                        <div class="content-part">
                                            <div class="name">
                                                <a href="<?= Url::to(['center/employee', 'id' => $center->id, 'employee' => $team->id]) ?>">
                                                    <?= implode('<br>', explode(' ', $team->name, 3)) ?>
                                                </a>
                                            </div>
                                            <span class="designation"><?= $team->lavozim->name ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
