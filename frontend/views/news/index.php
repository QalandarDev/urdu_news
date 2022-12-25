<?php
/**
 * @var $this \yii\web\View
 * @var $model \backend\models\News[]
 * @var $pages \yii\data\Pagination
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'Urgench State University');

$this->params['breadcrumbs'][] = Yii::t('app', 'News');
$cate = Yii::$app->request->get('cate');

?>

<section class="">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2 class="h1-text">
                    <?= Yii::t('app', 'Latest news') ?>
                </h2>
            </div>
        </div>
    </div>

    <?php foreach ($model as $item) : ?>
        <div class="row">
            <div class="col-md-12" style=" padding-bottom: 5px; border-bottom: 1px solid #ccc;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="blog-img" style="margin-top: 10px">
                            <img src="<?= $item->img ?>" alt="<?= $item->title ?>" style="height: 150px;"/>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>
                            <h4>
                            <a href="<?= Url::to(['news/index', 'id' => $item->id]) ?>" class="h4">
                                <?= mb_substr($item->title, 0, 120) ?>
                                ...</a>
                        </h4>
                        </p>
                        <p>
                            <i class="fa fa-user"></i>
                            admin
                            <i class="fa fa-calendar"></i>
                            <?= $item['date'] ?>
                            <i class="fa fa-eye"></i>
                            <?= $item['count'] ?>
                        </p>
                        <p>
                            <?= mb_substr(strip_tags($item->text), 0, 300) ?>...
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= LinkPager::widget(['pagination' => $pages]); ?>

</section>



