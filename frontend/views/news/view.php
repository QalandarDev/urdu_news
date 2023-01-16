<?php
/**
 * @var $this View
 * @var $home string
 * @var $model News
 * @var $category NewsCategory
 * @var $news News
 * @var $recent mixed
 */

use frontend\models\News;
use frontend\models\NewsCategory;
use yii\helpers\StringHelper;
use yii\web\View;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['news/index']];
$this->params['breadcrumbs'][] = StringHelper::truncate($model->title, 40);
$this->title = $model->title;
?>

<div class="rs-inner-blog  pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include 'right_sidebar.php'; ?>
            <div class="col-lg-8 pr-50 md-pr-15">
                <div class="blog-deatails">
                    <div class="bs-img">
                        <img class="primary-image" src="<?= $model->img ?>" alt="<?= $model->title ?>">
                        <?php
                        $this->registerMetaTag([
                            'name' => 'twitter:image',
                            'content' => $model->img,
                        ]);
                        $this->registerMetaTag([
                            'property' => 'og:image',
                            'content' => $model->img,
                        ]);
                        ?>
                    </div>
                    <div class="blog-full">
                        <ul class="single-post-meta">
                            <li>
                                <span class="p-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <?php
                                    $this->registerMetaTag([
                                        'name' => 'article:published_time',
                                        'content' => $model->date,
                                    ]);
                                    ?>
                                    <?= $model->date ?>
                                </span>
                            </li>
                            <li>
                                <span class="p-date">
                                    <i class="fa fa-user-o"></i>
                                    <?= $model->user->username ?? 'ADMIN' ?>
                                </span>
                            </li>
                            <li class="Post-cate">
                                <span class="tag-line">
                                    <i class="fa fa-book"></i>
                                    <a href="#"><?= $model->category->name ?></a>
                                </span>
                            </li>
                        </ul>
                        <div class="blog-desc">
                            <?= $model->text ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>