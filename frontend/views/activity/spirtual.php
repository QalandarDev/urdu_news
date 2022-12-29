<?php



/* @var $this \yii\web\View */
/* @var $newsCategories array|Newcate[]|\yii\db\ActiveRecord[] */
/* @var $category Newcate*/
/* @var $menuName string */

use backend\models\Newcate;

?>
<div class="rs-faq-part pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="content-part mb-50 md-mb-30">
            <div class="title mb-40 md-mb-15">
                <div class="h2 text-primary text-center"><?= $menuName ?></div>
            </div>
            <div id="accordion" class="accordion">
                <?php foreach ($newsCategories as $category): ?>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="<?= \yii\helpers\Url::to(['news/index','c'=>$category->id])?>" aria-expanded="true">
                                <?= $category->name ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
