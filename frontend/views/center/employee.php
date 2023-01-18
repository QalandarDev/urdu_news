<?php


/* @var $this View */
/* @var $team Employee|null */

/* @var $center Center|null */

use frontend\models\Employee;
use common\helpers\ScholarHelper;
use frontend\models\Center;
use yii\bootstrap5\Html;
use yii\web\View;

?>
<div class="rs-inner-blog pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <?php include '_left.php' ?>
            <div class="col-lg-8">
                <section class="profile-section pb-100 md-pt-70 md-pb-70 loaded">
                    <div class="container">
                        <div class="row clearfix">
                            <!-- Image Section -->
                            <div class="image-column col-lg-5 md-mb-50">
                                <div class="inner-column mb-50 md-mb-0">
                                    <div class="image">
                                        <img src="<?= "https://urdu.uz/hodimlar/" . $team->img ?>" alt="">
                                    </div>
                                    <div class="team-content text-center">
                                        <h3><?= $team->name ?></h3>
                                        <div class="text"><?= $team->position->name ?></div>
                                        <ul class="personal-info">
                                            <li class="email">
                                                <span><i class="fa fa-envelope"> </i> </span>
                                                <a href="mailto:<?= $team->email ?>"><?= $team->email ?></a>
                                            </li>
                                            <li class="phone">
                                                <span><i class="fa fa-phone"></i></span>
                                                <a href="tel:<?= $team->tel ?>"><?= $team->tel ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Content Section -->
                            <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                                <div class="inner-column">
                                    <h2><?= $team->name ?></h2>
                                    <h4><?= $team->position->name ?></h4>
                                </div>
                                <div class="content-part">
                                    <?= $team->autobiography ?>
                                </div>
                            </div>
                            <div class="content-part">
                                <div class="google-scholar">
                                    <div class="text-center text-primary p-2 h3"><?= Html::a('Google Scholar', "https://scholar.google.com/citations?user=" . $team->scholar) ?></div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width: 95%"
                                                class="text-center"><?= Yii::t('news', "Article title") ?></th>
                                            <th style="width: 5%"><?= Yii::t('news', 'Year') ?></th>
                                        </tr>
                                        </thead>
                                        <?= @ScholarHelper::getPublications($team->scholar) ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
