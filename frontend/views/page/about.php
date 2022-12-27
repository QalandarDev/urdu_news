<?php



/* @var $this View */
/* @var $model About|null */

use backend\models\About;
use yii\web\View;

$this->title = $model->title;
?>

<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="blog-deatails">
            <h3 class="blog-title text-center pt-50 "><?= $model->title ?></h3>
            <div class="blog-full">
                <div class="blog-desc">
                    <?= $model->text ?>
                </div>
            </div>
        </div>
    </div>
</div>
