<?php
/**
 * @var $this View
 * @var $model News[]
 * @var $pages Pagination
 */

use frontend\models\News;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\bootstrap4\LinkPager;
use yii\web\View;

$this->title = Yii::t('news', 'News');

$this->params['breadcrumbs'][] = Yii::t('app', 'News');
?>
<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include 'right_sidebar.php'; ?>
            <div class="col-lg-8 pr-50">
                <div class="row">
                    <?php foreach ($model as $news): ?>
                        <div class="col-lg-12 mb-70">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="<?= $news->img ?>" alt="">
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a
                                                href="<?= Url::to(['news/view', 'id' => $news->id]) ?>"><?= $news->title ?></a>
                                    </h3>
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
                                                    <i class="fa fa-user-o"></i> <?= $news->user->username ?? "ADMIN" ?>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tag-line">
                                                    <i class="fa fa-book"></i>
                                                    <a href="<?= Url::to(['news/index', 'c' => $news->cate]) ?>">
                                                        <?= $news->category->name ?>
                                                    </a>
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
                        <?php try {
                            echo LinkPager::widget(
                                [
                                    'pagination' => $pages,
                                ]
                            );
                        } catch (Throwable $e) {
                            echo $e->getMessage();
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





