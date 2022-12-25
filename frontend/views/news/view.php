<?php
/**
 * @var $this \yii\web\View
 * @var $home string
 * @var $model News
 * @var $category Newcate
 * @var $categories mixed
 * @var $news News
 * @var $recent mixed
 */

use backend\models\Newcate;
use backend\models\News;
use common\helpers\TextHelper;
use yii\helpers\Url;
use yii\helpers\StringHelper;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['news/index']];
$this->params['breadcrumbs'][] = StringHelper::truncate($model->title, 40);
?>

<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="<?= Yii::getAlias('@web') . '/img/services/2.png' ?>" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title"><?= $model->title ?></h1>
        <ul>
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li><?= $model->title ?></li>
        </ul>
    </div>
</div>
<div class="rs-inner-blog  pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                            <button type="submit" value="Search">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <h3 class="widget-title">
                            <?= TextHelper::News()?>
                        </h3>
                        <ul>
                            <?php foreach ($recent as $news): ?>
                                <li>
                                    <a href="<?= Url::to(['news/index', 'id' => $news->id]) ?>">
                                        <i class="fad fa-caret-right"></i>
                                        <?= $news->title ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="widget-archives mb-50">
                        <h3 class="widget-title">
                            <?= TextHelper::Category()?>
                        </h3>
                        <ul>
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <i class="far fa-chevron-right"></i>
                                    <a href="#">
                                        <?= $category->name ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="recent-posts mb-50">
                        <h3 class="widget-title">Meta</h3>
                        <ul>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries feed</a></li>
                            <li><a href="#">Comments feed</a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-50 md-pr-15">
                <div class="blog-deatails">
                    <div class="bs-img">
                        <a href="#"><img src="<?= $model->img ?>" alt=""></a>
                    </div>
                    <div class="blog-full">
                        <ul class="single-post-meta">
                            <li>
                                <span class="p-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <?= $model->date ?>
                                </span>
                            </li>
                            <li>
                                <span class="p-date">
                                    <i class="fa fa-user-o"></i>
                                    <?= $model->user->username ?>
                                </span>
                            </li>
                            <li class="Post-cate">
                                <div class="tag-line">
                                    <i class="fa fa-book"></i>
                                    <a href="#"><?= $model->category->name ?></a>
                                </div>
                            </li>
                        </ul>
                        <div class="blog-desc">
                            <?= $model->text ?>
                        </div>
                    </div>
                </div>
                <div class="ps-navigation">
                    <ul>
                        <li><a href="#"><span class="next-link">Next<i class="flaticon-next"></i></span></a></li>
                        <li><a href="#"><span class="link-text">Soundtrack filma Lady Exclusive Music </span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>