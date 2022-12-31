<?php
/* @var $this View */
/* @var $center Center|null */
/* @var $teams Hodim[]|null */

/* @var $team Hodim|null */

use backend\models\Center;
use backend\models\Hodim;
use yii\helpers\Url;
use yii\web\View;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <div id="rs-team"
                     class="rs-team style1 inner-style pt-30 pb-100 md-pt-64 md-pb-70 gray-bg">
                    <div class="container">
                        <div class="sec-title mb-50 md-mb-30 text-center">
                            <h2 class="title mb-0"><?= Yii::t('news', 'Employees') ?></h2>
                        </div>
                        <div class="row">
                            <?php foreach ($teams as $team): ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="team-item">
                                        <img src="<?= "https://urdu.uz/hodimlar/" . $team->img ?>" alt="">
                                        <div class="content-part">
                                            <div class="name">
                                                <a href="<?= Url::to(['faculty/employee', 'id' => $center->id, 'employee' => $team->id]) ?>">
                                                   <p>
                                                    <?= implode('<br>', explode(' ', $team->name,3)) ?>
                                                   </p>
                                                </a>
                                            </div>
                                            <span class="designation"><?= $team->lavozim->name ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

