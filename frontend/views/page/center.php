<?php
/* @var $this \yii\web\View */
/* @var $center \backend\models\Center|null */
/* @var $teams \backend\models\Hodim[]|null */

/* @var $team \backend\models\Hodim|null */

use yii\helpers\Url;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 pr-50 md-pr-15">
                <div class="widget-area">
                    <div class="widget-archives mb-50">
                        <h3 class="widget-title"><?= $center->name ?></h3>
                        <ul>
                            <li>
                                <a href="<?= Url::to(['page/faculty', 'id' => $center->id]) ?>">
                                    <?= Yii::t('news', 'Employees') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['page/faculty-about', 'id' => $center->id]) ?>">
                                    <?= Yii::t('news', 'About Faculty') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['page/faculty-news', 'id' => $center->id]) ?>">
                                    <?= Yii::t('news', 'News') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['page/faculty-info', 'id' => $center->id]) ?>">
                                    <?= Yii::t('news', 'Open Data') ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div id="rs-team"
                     class="rs-team style1 inner-style pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
                    <div class="container">
                        <div class="sec-title mb-50 md-mb-30 text-center">
                            <h2 class="title mb-0"><?= Yii::t('news', 'Employees') ?></h2>
                        </div>
                        <div class="row">
                            <?php foreach ($teams as $team): ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="team-item">
                                        <img src="<?= "https://urdu.uz/hodimlar/" . $team->img ?>" alt="">
                                        <div class="content-part">
                                            <div class="name">
                                                <a href="<?= Url::to(['faculty-employee', 'faculty' => $center->id,'employee'=>$team->id]) ?>">
                                                    <?= implode('<br>', explode(' ', $team->name)) ?>
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

