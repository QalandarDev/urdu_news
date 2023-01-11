<?php


/* @var $this View */
/* @var $about FacultyPage|null */

use frontend\models\FacultyPage;
use yii\web\View;

if ($about instanceof FacultyPage):?>
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
<?php endif; ?>