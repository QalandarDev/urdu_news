<?php

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use \common\helpers\TextHelper;
use yii\helpers\Url;

?>
<header id="rs-header" class="rs-header">
    <!-- Topbar Area Start -->
    <div class="topbar-area">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-6">
                    <ul class="topbar-contact">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@urdu.uz">info@urdu.uz</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+998622246700">+998 (62) 224 67 00</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <i class="fa fa-sign-in"></i>
                            <a href="login.html">Login</a>/<a href="register.html">Register</a>
                        </li>
                        <li class="btn-part">
                            <a class="apply-btn" href="#"><?= Yii::t('news', "Applying for a job") ?></a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <?= MultiLanguageWidget::widget([
                        'widget_type' => 'classic', // classic or selector
                        'image_type' => 'classic', // classic or rounded
                        'width' => '25',
                        'calling_controller' => $this->context
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-2">
                    <div class="logo-cat-wrap">
                        <div class="logo-part pr-90">
                            <a class="dark-logo" href="<?= Url::to(['/']) ?>">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_log.png" ?>" style="max-height: 75px"
                                     alt="">
                            </a>
                            <a class="light-logo" href="<?= Url::to(['/']) ?>">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_log.png" ?>" style="max-height: 75px"
                                     alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 text-center">
                    <div class="rs-menu-area">
                        <div class="main-menu pr-90">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu rs-menu-close">
                                <ul class="nav-menu">
                                    <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"><a
                                                href="index.html">Home</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="index.html">Main Demo</a></li>
                                                            <li><a href="index2.html">Online Course</a></li>
                                                            <li class="active"><a href="index3.html">University 01</a>
                                                            </li>
                                                            <li><a href="index4.html">E-Learning</a></li>
                                                            <li><a href="index5.html">Distance Learning</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="index6.html">Personal Demo</a></li>
                                                            <li><a href="index7.html">Online Training</a></li>
                                                            <li><a href="index8.html">Online Learning</a></li>
                                                            <li><a href="index9.html">Kitchen Coach</a></li>
                                                            <li><a href="index10.html">University 02</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="index11.html">Kindergarten 01</a></li>
                                                            <li><a href="index12.html">Freelancing Course</a></li>
                                                            <li><a href="index13.html">Gym Coach</a></li>
                                                            <li><a href="index14.html">Courses Archive</a></li>
                                                            <li><a href="index15.html">Courses Hub</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul> <!-- //.mega-menu -->
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span><span
                                                class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                          aria-hidden="true"></i></span></li>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= Yii::t('news', 'University') ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= Url::to(['news/index']) ?>">
                                                    <?= Yii::t('news', 'News') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['events/index']) ?>">
                                                    <?= Yii::t('news', 'Events') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about.html">
                                                    <?= Yii::t('news', 'Photo Gallery') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about.html">
                                                    <?= Yii::t('news', 'Video Gallery') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['page/history']) ?>">
                                                    <?= Yii::t('news', "History of University") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['page/regulation']) ?>">
                                                    <?= Yii::t('news', "Regulation of University") ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= Yii::t('news', 'Structure') ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= Url::to(['administration/']) ?>">
                                                    <?= Yii::t('news', 'Administration') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['faculty/index']) ?>">
                                                    <?= Yii::t('news', 'Faculties') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['department/index']) ?>">
                                                    <?= Yii::t('news', 'Departments') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['center/index']) ?>">
                                                    <?= Yii::t('news', 'Centers and Sections') ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= Yii::t('news', 'Activity') ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= Url::to(['activity/academic']) ?>">
                                                    <?= Yii::t('news', "Academic Council") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['activity/scientific']) ?>">
                                                    <?= Yii::t('news', 'Scientific and innovative activities') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['activity/spiritual']) ?>">
                                                    <?= Yii::t('news', 'Spiritual and educational activities') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['activity/international']) ?>">
                                                    <?= Yii::t('news', 'International relations') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['activity/financial'])?>">
                                                    <?= Yii::t('news', 'Financial Activities') ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= Yii::t('news', 'Applicants') ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="course.html">
                                                    <?= Yii::t('news', "Bachelor's degree") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course3.html">
                                                    <?= Yii::t('news', "Master's degree") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course2.html">
                                                    <?= Yii::t('news', 'Transfer Study') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course4.html">
                                                    <?= Yii::t('news', 'Second higher education') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course4.html">
                                                    <?= Yii::t('news', '5 years of experience') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course4.html">
                                                    <?= Yii::t('news', 'Joint education') ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= Yii::t('news', 'Open Data') ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="course3.html">
                                                    <?= Yii::t('news', "Regulatory documents") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course2.html">
                                                    <?= Yii::t('news', "E-learning programs") ?>
                                                </a>
                                            </li>

                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                        <div class="expand-btn-inner">
                            <ul>
                                <li>
                                    <a class="hidden-xs rs-search short-border" data-target=".search-modal"
                                       data-toggle="modal" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Menu start -->

    <!-- Canvas Menu end -->
</header>
