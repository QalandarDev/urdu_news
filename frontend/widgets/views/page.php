<?php


/**
 * @var $this View
 * @var $pages Page[]
 * @var $page Page
 * @var $title string
 */

use frontend\models\Page;
use yii\helpers\Url;
use yii\web\View;

?>
<div class="rs-faq-part pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="content-part mb-50 md-mb-30">
            <div class="title mb-40 md-mb-15">
                <div class="h2 text-primary text-center"><?= $title ?></div>
            </div>
            <div id="accordion" class="accordion">
                <?php foreach ($pages as $page): ?>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="<?= Url::to(['page/view', 'id' => $page->id]) ?>"
                               aria-expanded="true">
                                <?= $page->title ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
