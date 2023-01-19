<?php

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\helpers\Url;

?>
<header id="rs-header" class="rs-header">
    <!-- Top bar Area Start -->
    <div class="top-bar-area">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-6">
                    <ul class="top-bar-contact">
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
                <div class="offset-4 col-md-2">
                    <?php try{
                        echo MultiLanguageWidget::widget([
                        'widget_type' => 'classic', // classic or selector
                        'image_type' => 'classic', // classic or rounded
                        'width' => '50',
                        'calling_controller' => $this->context
                    ]);
                    }
                    catch(Throwable $e){
                        echo $e->getMessage();
                    } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- top-bar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-2">
                    <div class="logo-cat-wrap">
                        <div class="logo-part pr-90">
                            <a class="dark-logo" href="<?= Url::to(['/']) ?>">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_logo.webp" ?>"
                                     style="width: auto;height: 100%" alt="logo">
                            </a>
                            <a class="light-logo" href="<?= Url::to(['/']) ?>">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_logo.webp" ?>"
                                     style="width: 100%;height: 100%" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 text-center">
                    <div class="rs-menu-area">
                        <div class="main-menu pr-90">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle" href="#" aria-label="Menu Button">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu rs-menu-close">
                                <ul class="nav-menu">
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
                                                <a href="#">
                                                    <?= Yii::t('news', 'Photo Gallery') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
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
                                                <a href="<?= Url::to(['activity/financial']) ?>">
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
                                                <a href="<?= Url::to(['applicant/bachelor']) ?>">
                                                    <?= Yii::t('news', "Bachelor's degree") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to('applicant/master') ?>">
                                                    <?= Yii::t('news', "Master's degree") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['applicant/transfer']) ?>">
                                                    <?= Yii::t('news', 'Transfer Study') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['applicant/second']) ?>">
                                                    <?= Yii::t('news', 'Second higher education') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['applicant/five']) ?>">
                                                    <?= Yii::t('news', '5 years of experience') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['applicant/joint']) ?>">
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
                                                <a href="#">
                                                    <?= Yii::t('news', "Regulatory documents") ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <?= Yii::t('news', "E-learning programs") ?>
                                                </a>
                                            </li>

                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Menu start -->

    <!-- Canvas Menu end -->
</header>
