<?php


/**
 * @var $this View
 * @var $about CenterPage|null
 */

use frontend\models\Center;
use frontend\models\CenterPage;
use yii\web\View;
//    "twbs/bootstrap": "5.0.2",
?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <?= $about->about ?>
            </div>
        </div>
    </div>
</div>