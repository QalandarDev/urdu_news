<?php


/* @var $this \yii\web\View */
/* @var $about \backend\models\CenterPage|null */
/* @var $center \backend\models\Center|null*/

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
                <?= $about->about ?>
            </div>
        </div>
    </div>

