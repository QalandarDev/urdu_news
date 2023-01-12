<?php


/* @var $this View */

/* @var $about string */

use frontend\models\FacultyPage;
use yii\web\View;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <?=
                preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/iU', '<div>$1</div>', $about)
                ?>
            </div>
        </div>
    </div>
</div>
