<?php
/**
 * @var $recentNews News[]
 * @var $news News
 * @var $categories Newcate
 */

use backend\models\Newcate;
use backend\models\News;
use yii\helpers\Url;

?>
<div class="col-lg-4 col-md-12 order-last">
    <div class="widget-area">
        <div class="search-widget mb-50">
            <div class="search-wrap">
                <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
            </div>
        </div>
        <div class="recent-posts mb-50">
            <h3 class="widget-title"> <?= Yii::t('news', "Latest News") ?></h3>
            <ul>
                <?php foreach ($recentNews as $news): ?>
                    <li>
                        <a href="<?= Url::to(['news/view', 'id' => $news->id]) ?>">
                            <i class="fad fa-caret-right"></i>
                            <?= $news->title ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="widget-archives mb-50">
            <h3 class="widget-title">Categories</h3>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <li>
                        <i class="far fa-chevron-right"></i>
                        <a href="<?= Url::to(['news/index', 'c' => $category->id]) ?>">
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