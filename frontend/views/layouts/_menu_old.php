<?php
/**
 * @var $this \yii\web\View
 */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\AllAction;

$webRoot = Yii::$app->request->baseUrl;
$bakalavrall = \backend\models\AllAction::find()->where(['cate' => 5, 'status' => 1])->orderBy(['position' => SORT_ASC])->all();
$cal_certr = $bakalavrall[0];
$qdastur = AllAction::find()->where(['cate' => 12])->all();
$texnikum = AllAction::find()->where(['cate' => 13])->all();
$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
?>
<div class="search-area">
    <span class="closs-btn">Close</span>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="search-form">
                    <form method="get" id='search' action='<?=Url::to('/site/search')?>'>
                        <input type="text" name="text" placeholder=<?=Yii::t('app','Search')?> >
                        <button type="submit" class="btn-style"><?=Yii::t('app','Search')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- heared area start -->

<header class="header-area">
    <div class="header-top bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="header-top-left"></div>
                </div>
                <div class="col-md-7 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul class="pull-right">
                            <?= MultiLanguageWidget::widget([
                                'widget_type' => 'classic', // classic or selector
                                'image_type' => 'classic', // classic or rounded
                                'width' => '25',
                                'calling_controller' => $this->context
                            ]); ?>
                        </ul>
                        <ul class="pull-right">
                            <li><a href="https://t.me/URDU_PRESSA" target="_blank"><i class="fa fa-telegram"></i></a>
                            </li>
                            <li><a href="http://mail.urdu.uz" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
                            <li>
                                <a href="https://www.facebook.com/urduuz" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCkQ8N0jtKR9VigB0FALuFvA"><i
                                        class="fa fa-youtube"></i></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-1 hidden-sm hidden-xs">
                    <div class="logo" style="margin-top:7px;margin:5px 0px 5px -5px">
                        <a href="<?= Url::to(['site/index']) ?>">
                            <img src="<?= $webRoot ?>/martxa/martxa/assets/images/96D6F2E7E1F705AB5E59C84A6DC009B2.png"
                                 style="width: 70px" alt=""></a>

                    </div>

                </div>
                <div class="col-md-2 hidden-sm hidden-xs" style="margin:0px 0px 0px -30px">
                    <div class="logo" style="margin-top:12px">
                        <b><p><?= Yii::t('app', 'Urgench state university') ?></p></b>

                    </div>
                </div>
                <!--                <div class="col-md-1 hidden-sm hidden-xs">-->
                <!---->
                <!--                </div>-->

                <div class="col-md-9 col-xs-12" id="mobile">
                    <!--                    --><?php
                    //                    $qabulxona = array('title_uz' => 'REKTOR VIRTUAL QABULXONASI', 'title_ru' => '', 'title_en' => '');//Rektor qabulxonasi
                    //                    $email = array('title_uz' => 'E-MAIL', 'title_ru' => '', 'title_en' => 'E-MAIL');
                    //                    $tel = array('title_uz' => 'TEL', 'title_ru' => 'ТЕЛ', 'title_en' => 'PHONE');
                    //                    $aloqa = array('title_uz' => 'ALOQA', 'title_ru' => '', 'title_en' => 'CONTACT-US');
                    //                    ?>
                    <div class="header-middle-right">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <!--                                    <p>--><?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?>
                                    <!--                                    </p>-->
                                    <!--                                    <span><a href="http://dl.urdu.uz/"-->
                                    <!--                                             style="color:white; ">-->
                                    <?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?><!--</a>-->
                                    <!--                                    </span>-->
                                    <p><?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?>

                                        <a href="https://urdu.uz/site/active?id=27"
                                           style="color:white; "><?= Yii::t('app', 'For applicants') ?></a>
                                    </p>
                                    <span style="color:white; "><a href="https://urdu.uz/site/active?id=27"
                                                                   style="color:white; "><?= $cal_certr[$title] ?> </a>
                                        </span>
                                </div>
                            </li>

                            <li>
                                <div class="contact-icon">
                                    <a href="https://www.urdu.uz/site/active?id=92"><i
                                            class="fa fa-calendar-check-o"></i></a>
                                </div>
                                <div class="contact-info">
                                    <p><a href="https://www.urdu.uz/site/active?id=92"
                                          style="color:white;">Ijodiy<br>imtihon</a>
                                    </p>
                                </div>
                            </li>
                            <!--                            <li>-->
                            <!--                                <div class="contact-icon">-->
                            <!--                                    <a href="http://cam.urdu.uz/" style="color:white; "><i-->
                            <!--                                            class="fa fa-video-camera"></i></a>-->
                            <!--                                </div>-->
                            <!--                                <div class="contact-info">-->
                            <!--                                    <span><a href="http://cam.urdu.uz/" style="color:white; ">Al-Xorazmiy nomidagi Xarqaro fizika-matematika  makatab internatiga qabul test jarayoni </a></span>-->
                            <!--                                </div>-->
                            <!--                            </li>-->
                            <li>
                                <div class="contact-icon">
                                    <a href="https://www.urdu.uz/site/active?id=63"><i class="fa fa-calendar"></i></a>
                                </div>
                                <div class="contact-info">
                                    <p><a href="https://www.urdu.uz/site/active?id=63"
                                          style="color:white;">Dars<br>jadvali</a>
                                    </p>

                                </div>
                            </li>

                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <div class="contact-info">

                                    <span><a href="http://rektor.urdu.uz/" target="_blank"
                                             style="color:white; ">
                                            <?=Yii::t('app','Virtual reception')?>
                                        </a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom fixed-top" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                    <div class="logo">
                        <a href="<?= Url::to(['/site/index']) ?>"><img
                                src="<?= $webRoot ?>/martxa/martxa/assets/images/96D6F2E7E1F705AB5E59C84A6DC009B2.png"
                                style="width: 70px" alt=""></a>

                    </div>
                </div>

                <!--Tuzulma-->
                <?php


                ?>
                <!--Tuzulmani tugashi-->

                <!--Faoliyat-->

                <?php
                $document = Yii::t('app','Documents');
                $xfx =Yii::t('app','Ecology and environmental protection');
                $kengash = \backend\models\AllCate::find()->where(['id' => 1])->one();
                $xalqaro = \backend\models\AllCate::find()->where(['id' => 2])->one();
                $moliya = \backend\models\AllCate::find()->where(['id' => 3])->one();
                $manaviy = \backend\models\AllCate::find()->where(['id' => 4])->one();
                $bakalovr = \backend\models\AllCate::find()->where(['id' => 5])->one();
                $magistr = \backend\models\AllCate::find()->where(['id' => 6])->one();
                $magistrs = \backend\models\AllCate::find()->where(['id' => 7])->one();
                $bakalovrs = \backend\models\AllCate::find()->where(['id' => 8])->one();

                $kengashall = \backend\models\AllAction::find()->where(['cate' => $kengash['id']])->all();
                $xalqaroall = \backend\models\AllAction::find()->where(['cate' => $xalqaro['id']])->all();
                $moliyaall = \backend\models\AllAction::find()->where(['cate' => $moliya['id']])->all();
                $manaviyall = \backend\models\AllAction::find()->where(['cate' => $manaviy['id']])->all();

                $magistrall = \backend\models\AllAction::find()->where(['cate' => 6])->orderBy(['position' => SORT_ASC])->all();
                $bakalavralls = \backend\models\AllAction::find()->where(['cate' => 7])->all();
                $magistralls = \backend\models\AllAction::find()->where(['cate' => 8])->all();
                $xorijiyt = \backend\models\AllAction::find()->where(['cate' => 9])->all();

                $urls = substr($_SERVER['REQUEST_URI'], 0, 16);
                $urlen = substr($_SERVER['REQUEST_URI'], 0, 14);
                ?>

                <!--Faoliyatni tugashi-->
                <div class="col-md-11 hidden-sm hidden-xs">
                    <div class="mainmenu">
                        <ul id="navigation">
                            <li class="active" style="width: 60px"><a style="text-align: center;font-size: 25px"
                                                                      href="<?= Url::to(['/site/index']) ?>"><i
                                        class="fa fa-home"></i>
                                </a>
                            </li>

                            <li><a href="<?= Url::to(['news/index']) ?>">
                                    <?= Yii::t('app', 'News') ?>
                                    <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?= Url::to(['news/index']) ?>">
                                            <?= Yii::t('app', 'News') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['news/events']) ?>"><?= Yii::t('app', 'Events') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['news/gallery']) ?>">
                                            <?= Yii::t('app', 'Photo gallery') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['news/videos']) ?>">
                                            <?= Yii::t('app', 'Video gallery') ?></a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/about']) ?>">
                                    <?= Yii::t('app', 'Structure') ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="submenu" style="width: 250px">
                                    <li>
                                        <a href="<?= Url::to(['/site/about']) ?>">
                                            <?= Yii::t('app', 'History of university') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['/site/nizom']) ?>">
                                            <?= Yii::t('app', 'Regulation of university') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['/site/rektorat']) ?>"><?= Yii::t('app', 'Rectorate') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['/site/faculty']) ?>"><?= Yii::t('app', 'Faculties') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['/site/department']) ?>"><?= Yii::t('app', 'Departments') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to(['site/center']) ?>">
                                            <?= Yii::t('app', 'Centers and departments') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <!--                                            --><?php //= Yii::t('app', 'Centers and departments') ?>
                                            <!--                                            Universitet ilmiy-amaliy muzeyi-->
                                            Universitet Tasarrufidagi muassalar
                                            <ul class="submenu">
                                                <li>
                                                    <a href="<?= Url::to(['museum/index']) ?>">
                                                        Urganch davlat universiteti ilmiy-amaliy muzeyi
                                                    </a>
                                                </li>
                                            </ul>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">
                                    <?= Yii::t('app', 'Activity') ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="megamenu">
                                    <li>
                                        <a class="mega-title" href="#" >
                                            <i class="fa fa-bars"></i>
                                            <b><?= $kengash[$name] ?></b></a>
                                        <ul>
                                            <?php foreach ($kengashall as $keng) { ?>

                                                <li><a href="<?= Url::to(['/site/active?id=' . $keng->id]) ?>">
                                                        <i class="fa fa-caret-right"></i> <?= $keng[$title] ?></a>
                                                </li>

                                            <?php } ?>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="mega-title"  href="#">
                                            <i class="fa fa-bars"></i>
                                            <b><?= $xalqaro[$name] ?></b>
                                        </a>
                                        <ul>
                                            <?php foreach ($xalqaroall as $xal) { ?>

                                                <li><a
                                                       href="<?= Url::to(['/site/active?id=' . $xal->id]) ?>"><i
                                                            class="fa fa-caret-right"></i> <?= $xal[$title] ?></a>
                                                </li>

                                            <?php } ?>
                                            <li><a
                                                   href="<?= Url::to(['/site/viewcate?id=12']) ?>"><i
                                                        class="fa fa-caret-right"></i> MCOLE </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="mega-title" id="menu" href="#"><i class="fa fa-bars"></i>
                                            <b><?= $moliya[$name] ?></b></a>
                                        <ul>
                                            <?php foreach ($moliyaall as $moliya) { ?>

                                                <li><a
                                                       href="<?= Url::to(['/site/active?id=' . $moliya->id]) ?>"><i
                                                            class="fa fa-caret-right"></i> <?= $moliya[$title] ?>
                                                    </a></li>

                                            <?php } ?>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="mega-title" id="menu" href="#"><i class="fa fa-bars"></i>
                                            <b><?= $manaviy[$name] ?></b></a>
                                        <ul>

                                            <?php
                                            $m1 = Yii::t('app','Cultural Events');
                                            $m2 = Yii::t('app','Sport events');
                                            $m3 =Yii::t('app','Students\' life');
                                            $m4 = Yii::t('app','Events of Youth Union');
                                            $m5 = Yii::t('app','Reforms - in the views of university team');
                                            $m6 = Yii::t('app','My opinion');
                                            ?>
                                            <li><a
                                                   href="<?= Url::to(['/site/viewcate?id=8']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m1?> </a></li>
                                            <li><a
                                                   href="<?= Url::to(['/site/viewcate?id=9']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m2?> </a></li>
                                            <li><a
                                                   href="<?= Url::to(['/site/viewcate?id=10']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m3?> </a></li>
                                            <li><a
                                                   href="<?= Url::to(['/site/viewcate?id=11']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m4?> </a></li>
                                            <li><a
                                                   href="<?= Url::to(['/site/active?id=94']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m5?> </a></li>
                                            <li><a
                                                   href="<?= Url::to(['site/viewcate?id=14']) ?>"><i
                                                        class="fa fa-caret-right"></i> <?= $m6?> </a></li>

                                        </ul>
                                    </li>

                                </ul>

                            </li>
                            <li><a href="#"><?=Yii::t('app','Applicant') ?><i class="fa fa-angle-down"></i></a>

                                <ul class="megamenu">
                                    <li>
                                        <a class="mega-title" href="#" id="menu"><i class="fa fa-bars"></i>
                                            <b><?= $bakalovr[$name] ?></b></a>
                                        <ul>
                                            <li>
                                                <a href="<?= Url::to(['mandat/index']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    Test sinovlar qaydnomasi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['student/index']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    <?= Yii::t('app', 'Reception of documents (online)') ?>
                                                </a>
                                            </li>


                                            <?php
                                            foreach ($bakalavrall as $bak) { ?>

                                                <?php if ($bak->id == 42): ?>
                                                    <li><a
                                                           href="<?= Url::to(['qabul/index']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $bak[$title] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li><a
                                                           href="<?= Url::to(['/site/active?id=' . $bak->id]) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $bak[$title] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php } ?>
                                            <li>
                                                <a href="<?= Url::to(['/site/active', 'id' => 112]) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    5 yil stajli qabul
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="mega-title" id="menu" href="#"><i class="fa fa-bars"></i>
                                            <b><?= $magistr[$name] ?></b></a>
                                        <ul>
                                            <li>
                                                <a href="<?= Url::to(['student/magistr-mandat']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    Magistraturaga kirish natijalari
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['student/magistr']) ?>">
                                                    <i class="fa fa-caret-right"></i> <?= Yii::t('app', 'Reception of documents (online)') ?>
                                                </a>
                                            </li>


                                            <?php
                                            //                                            unset($magistrall[6]);
                                            foreach ($magistrall as $mag) { ?>

                                                <li><a 
                                                       href="<?= Url::to(['/site/active?id=' . $mag->id]) ?>"><i
                                                            class="fa fa-caret-right"></i> <?= $mag[$title] ?></a>
                                                </li>

                                            <?php } ?>
                                        </ul>
                                        <br><br>
                                        <hr>

                                    </li>
                                    <li>
                                        <a href="#" class="mega-title">
                                            <i class="fa fa-bars"></i>
                                            <b>QO'SHMA DASTURLAR</b>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="http://qt.urdu.uz">
                                                    <i class="fa fa-caret-right"></i>
                                                    <?= Yii::t('app', 'Reception of documents (online)') ?>
                                                </a>
                                            </li>
                                            <?php foreach ($qdastur as $item): ?>
                                                <li>
                                                    <a href="<?= Url::to(['/site/active', 'id' => $item->id]) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= $item[$title] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" class="mega-title text-uppercase" >
                                            <i class="fa fa-bars"></i>
                                            <b>Urganch davlat universiteti huzuridagi texnikumlar
                                            </b>
                                        </a>
                                        <ul>
                                            <?php foreach ($texnikum as $item): ?>
                                                <li>
                                                    <a href="<?= Url::to(['/site/active', 'id' => $item->id]) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= $item[$title] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>


                                </ul>

                            </li>
                            <li>
                                <a href="#"><?= Yii::t('app', 'Students') ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>

                                <ul class="megamenu">
                                    <li>
                                        <a class="mega-title" href="#"><i class="fa fa-bars"></i>
                                            <b><?= $bakalovr[$name] ?></b></a>
                                        <ul>
                                            <?php foreach ($bakalavralls as $bak) { ?>

                                                <li><a href="<?= Url::to(['/site/active?id=' . $bak->id]) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= $bak[$title] ?>
                                                    </a>
                                                </li>

                                            <?php } ?>

                                        </ul>
                                    </li>

                                    <li>
                                        <a class="mega-title" href="#"><i class="fa fa-bars"></i>
                                            <b><?= $magistr[$name] ?></b></a>
                                        <ul>
                                            <?php foreach ($magistralls as $mag) { ?>

                                                <li>
                                                    <a href="<?= Url::to(['/site/active?id=' . $mag->id]) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= $mag[$title] ?>
                                                    </a>
                                                </li>

                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="mega-title" href="#">
                                            <i class="fa fa-bars"></i>
                                            <b class="text-uppercase">O'qishni ko'chirish</b>
                                        </a>
                                        <ul>
                                            <li>
                                                <a target="_blank"
                                                   href="https://transfer.edu.uz/<?= Yii::$app->language ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    <?= Yii::t('app', 'The transfer and recover study') ?>
                                                    <sup style="color: red">New</sup>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['/transfer/index']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    OTMlardan UrDUga
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['/transfer/xorijiy']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    Xorijiy OTMlardan UrDUga
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to(['/transfer/turdosh']) ?>">
                                                    <i class="fa fa-caret-right"></i>
                                                    Tudosh bo'lmagan yo'nalishlarga
                                                </a>
                                            </li>


                                        </ul>
                                    </li>


                                </ul>

                            </li>

                            <li>
                                <a href="<?= Url::to(['site/active', 'id' => 48]) ?>">
                                    <?= Yii::t('app','International students')?>
                                    <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu" style="width: 250px">
                                    <?php foreach ($xorijiyt as $mag) { ?>
                                        <li>
                                            <a href="<?= Url::to(['/site/active?id=' . $mag->id]) ?>"><?= $mag[$title] ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php if (Yii::$app->language != 'ru'): ?>
                                <li><a href="<?= Url::to(['/site/about']) ?>">
                                        <?= $document ?>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="submenu" style="width: 250px">
                                        <?php
                                        $doc1 = Yii::t('app','Decrees of the President');
                                        $doc2 = Yii::t('app','Decrees and Programs of Government');
                                        $doc3 = Yii::t('app','Regulatory documents of University');
                                        ?>
                                        <li>
                                            <a href="https://urdu.uz/file/ЎРҚ-637-сон 23.09.2020-compressed.pdf" target="_blank">
                                                Ta'lim to'g'risidagi qonun
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://lex.uz/search/all?body_id=739&fbody_id=815">
                                                <?= $doc1 ?></a>
                                        </li>
                                        <li>
                                            <a href="http://lex.uz/search/nat?body_id=739&fform_id=3972">
                                                <?= $doc2 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/normative']) ?>">
                                                <?= $doc3 ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <?php
                            $inter = array('title_uz' => 'Interaktiv xizmatlar', 'title_ru' => 'Интерактивные услуги', 'title_en' => 'Interactive service');

                            ?>
                            <li><a href=""><?= $inter[$title] ?><i class="fa fa-angle-down"></i></a>
                                <ul class="submenu" style="width: 250px">
                                    <?php

                                    $ints = \backend\models\Interaktive::find()->all();
                                    $name = "name_" . Yii::$app->language;
                                    foreach ($ints as $int) {
                                        ?>
                                        <li><a href="<?= $int['url'] ?>"><?= $int[$name] ?></a></li>
                                    <?php } ?>

                                </ul>
                            </li>
                            <?php if (Yii::$app->language != 'en'): ?>
                                <li>
                                    <?= Html::a(Yii::t('app', 'Masofaviy ta\'lim') . " <i class='fa fa-angle-down'></i>") ?>
                                    <ul class="submenu">
                                        <li><?= Html::a(Yii::t('app', 'News'), ['education/news']) ?></li>
                                        <li><?= Html::a(Yii::t('app', 'Me\'eriy xujjatlar'), ['education/normative']) ?></li>
                                        <li><?= Html::a(Yii::t('app', 'Dars jadvallari'), ['education/schedule']) ?></li>
                                        <li><?= Html::a(Yii::t('app', 'Zoom'), ['education/schedule']) ?></li>
                                        <li><?= Html::a(Yii::t('app', 'Metodik ko‘rsatmalar'), ['education/metodic']) ?></li>
                                        <li><?= Html::a(Yii::t('app', 'dl.urdu.uz'), 'http://dl.urdu.uz') ?></li>
                                        <li><?= Html::a(Yii::t('app', 'olimp.urdu.uz'), 'http://olimp.urdu.uz') ?></li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <!--                            <li>-->
                            <!--                                --><?php
                            //                                //= Html::a(Yii::t('app', 'Covid-19') . '<sup style="color: red">new</sup>', 'https://urdu.uz/site/viewcate?id=16')
                            //
                            //                                ?>
                            <!--                                <a href="-->
                            <?php //= Url::to(['/site/active', 'id' => 92]) ?><!--">-->
                            <!--                                    --><?php //= $bakalavrall[12][$title] ?>
                            <!--                                </a>-->
                            <!--                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3">
                    <div class="search-wrap text-right">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                    <div class="responsive-menu-wrap floatright"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- heared area end -->
