<?php


/* @var $this \yii\web\View */
/* @var $model array|\backend\models\News[]|\yii\db\ActiveRecord[] */
/* @var $news \backend\models\News */
/* @var $center \backend\models\Center|null */

/* @var $pagination \common\helpers\Pagination */

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8 pr-50 pt-30">
                <div class="row">
                    <?php foreach ($model as $news): ?>
                        <div class="col-lg-12 mb-70">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#"><img src="<?= $news->img ?>" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="<?= Url::to(['news/view', 'id' => $news->id]) ?>"><?= $news->title ?></a></h3>
                                    <div class="blog-meta">
                                        <ul class="btm-cate">
                                            <li>
                                                <div class="blog-date">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                    <?= $news->date ?>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="author">
                                                    <i class="fa fa-user-o"></i> <?= $news->user->username ?>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tag-line">
                                                    <i class="fa fa-book"></i>
                                                    <a href="#"><?= $news->category->name ?></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-desc">
                                        <?= $news->short ?>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-btn" href="<?= Url::to(['news/view', 'id' => $news->id]) ?>">
                                            <?= Yii::t('news', "Read More") ?>
                                        </a>
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
    </div>

