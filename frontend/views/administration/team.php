<?php


/* @var $this View */
/* @var $team Administration */

use frontend\models\Administration;
use yii\web\View;

$this->title=$team->name.' | '.$team->position;
?>

<section class="profile-section pt-100 pb-100 md-pt-70 md-pb-70 loaded">
    <div class="container">
        <div class="row clearfix">
            <!-- Image Section -->
            <div class="image-column col-lg-5 md-mb-50">
                <div class="inner-column mb-50 md-mb-0">
                    <div class="image">
                        <img src="<?= $team->image ?>" alt="">
                    </div>
                    <div class="team-content text-center">
                        <h3><?= $team->name ?></h3>
                        <div class="text"><?= $team->position ?></div>
                        <ul class="personal-info">
                            <li class="email">
                                <span><i class="fa fa-envelope"> </i> </span>
                                <a href="mailto:<?= $team->email ?>"><?= $team->email ?></a>
                            </li>
                            <li class="phone">
                                <span><i class="fa fa-phone"></i></span>
                                <a href="tel:<?= $team->phone ?>"><?= $team->phone ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Content Section -->
            <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                <div class="inner-column">
                    <h2><?= $team->name ?></h2>
                    <h4><?= $team->position ?></h4>
                </div>
                <div class="content-part">
                    <?= $team->autobiography ?>
                </div>
            </div>
        </div>
    </div>
</section>
