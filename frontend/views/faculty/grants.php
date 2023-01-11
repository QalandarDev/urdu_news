<?php


/* @var $this View */

/* @var $grants string */

use frontend\models\FacultyPage;
use yii\web\View;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <?=
                //preg replace all p tags to div tags in $communication
//                preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/iU', '<div>$1</div>', $grants)
                $grants
                ?>
            </div>
        </div>
    </div>
</div>
