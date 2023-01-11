<?php


/* @var $this View */
/* @var $actions array|Page[]|ActiveRecord[] */
/* @var $menuName string*/
/* @var $action Page */

use Page;
use yii\db\ActiveRecord;
use yii\web\View;
$this->title= $menuName;
?>
<div class="rs-faq-part pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="content-part mb-50 md-mb-30">
            <div class="title mb-40 md-mb-15">
                <div class="h2 text-primary text-center"><?= $menuName ?></div>
            </div>
            <div id="accordion" class="accordion">
                <?php foreach ($actions as $action): ?>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="<?= \yii\helpers\Url::to(['page/view','id'=>$action->id])?>" aria-expanded="true">
                                <?= $action->title ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>