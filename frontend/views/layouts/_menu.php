<?php
/**
 * @var $this \yii\web\View
 */

use backend\models\AllCate;
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
<!--    <style>-->
<!--        .lightrope {-->
<!--            text-align: center;-->
<!--            white-space: nowrap;-->
<!--            overflow: hidden;-->
<!--            position: absolute;-->
<!--            z-index: 1;-->
<!--            margin: -15px 0 0 0;-->
<!--            padding: 0;-->
<!--            pointer-events: none;-->
<!--            width: 100%;-->
<!--        }-->
<!--        .lightrope li {-->
<!--            position: relative;-->
<!--            -webkit-animation-fill-mode: both;-->
<!--            animation-fill-mode: both;-->
<!--            -webkit-animation-iteration-count: infinite;-->
<!--            animation-iteration-count: infinite;-->
<!--            list-style: none;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--            display: block;-->
<!--            width: 12px;-->
<!--            height: 28px;-->
<!--            border-radius: 50%;-->
<!--            margin: 20px;-->
<!--            display: inline-block;-->
<!--            background: #00f7a5;-->
<!--            box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;-->
<!--            -webkit-animation-name: flash-1;-->
<!--            animation-name: flash-1;-->
<!--            -webkit-animation-duration: 2s;-->
<!--            animation-duration: 2s;-->
<!--        }-->
<!--        .lightrope li:nth-child(2n+1) {-->
<!--            background: aqua;-->
<!--            box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.5);-->
<!--            -webkit-animation-name: flash-2;-->
<!--            animation-name: flash-2;-->
<!--            -webkit-animation-duration: 0.4s;-->
<!--            animation-duration: 0.4s;-->
<!--        }-->
<!--        .lightrope li:nth-child(4n+2) {-->
<!--            background: #f70094;-->
<!--            box-shadow: 0px 4.6666666667px 24px 3px #f70094;-->
<!--            -webkit-animation-name: flash-3;-->
<!--            animation-name: flash-3;-->
<!--            -webkit-animation-duration: 1.1s;-->
<!--            animation-duration: 1.1s;-->
<!--        }-->
<!--        .lightrope li:nth-child(odd) {-->
<!--            -webkit-animation-duration: 1.8s;-->
<!--            animation-duration: 1.8s;-->
<!--        }-->
<!--        .lightrope li:nth-child(3n+1) {-->
<!--            -webkit-animation-duration: 1.4s;-->
<!--            animation-duration: 1.4s;-->
<!--        }-->
<!--        .lightrope li:before {-->
<!--            content: "";-->
<!--            position: absolute;-->
<!--            background: #222;-->
<!--            width: 10px;-->
<!--            height: 9.3333333333px;-->
<!--            border-radius: 3px;-->
<!--            top: -4.6666666667px;-->
<!--            left: 1px;-->
<!--        }-->
<!--        .lightrope li:after {-->
<!--            content: "";-->
<!--            top: -14px;-->
<!--            left: 9px;-->
<!--            position: absolute;-->
<!--            width: 52px;-->
<!--            height: 18.6666666667px;-->
<!--            border-bottom: solid #222 2px;-->
<!--            border-radius: 50%;-->
<!--        }-->
<!--        .lightrope li:last-child:after {-->
<!--            content: none;-->
<!--        }-->
<!--        .lightrope li:first-child {-->
<!--            margin-left: -40px;-->
<!--        }-->
<!---->
<!--        @-webkit-keyframes flash-1 {-->
<!--            0%, 100% {-->
<!--                background: #00f7a5;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(0, 247, 165, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 247, 165, 0.2);-->
<!--            }-->
<!--        }-->
<!---->
<!--        @keyframes flash-1 {-->
<!--            0%, 100% {-->
<!--                background: #00f7a5;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(0, 247, 165, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 247, 165, 0.2);-->
<!--            }-->
<!--        }-->
<!--        @-webkit-keyframes flash-2 {-->
<!--            0%, 100% {-->
<!--                background: aqua;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px aqua;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(0, 255, 255, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.2);-->
<!--            }-->
<!--        }-->
<!--        @keyframes flash-2 {-->
<!--            0%, 100% {-->
<!--                background: aqua;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px aqua;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(0, 255, 255, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.2);-->
<!--            }-->
<!--        }-->
<!--        @-webkit-keyframes flash-3 {-->
<!--            0%, 100% {-->
<!--                background: #f70094;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px #f70094;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(247, 0, 148, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(247, 0, 148, 0.2);-->
<!--            }-->
<!--        }-->
<!--        @keyframes flash-3 {-->
<!--            0%, 100% {-->
<!--                background: #f70094;-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px #f70094;-->
<!--            }-->
<!--            50% {-->
<!--                background: rgba(247, 0, 148, 0.4);-->
<!--                box-shadow: 0px 4.6666666667px 24px 3px rgba(247, 0, 148, 0.2);-->
<!--            }-->
<!--        }-->
<!--    </style>-->
<!--        <ul class="lightrope" style="background-color: #3F477B">-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--        </ul>-->
    <!-- heared area start -->
    <header class="header-area">
        <div class="header-top bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <a href="<?= Url::to(['/site/active?id=' . 170]) ?>">
                                <img src="<?=Yii::$app->request->baseUrl.'/img/flag.png'?>" width="29" height="23" alt="lang">

                            </a>
                            <a href="<?= Url::to(['/site/active?id=' . 171]) ?>">
                                <img src="<?=Yii::$app->request->baseUrl.'/img/gerb.png'?>" width="29" height="23" alt="lang">

                            </a>
                            <a href="<?= Url::to(['/site/active?id=' . 172]) ?>">
                                <img src="<?=Yii::$app->request->baseUrl.'/img/gimn.png'?>" width="29" height="20" alt="lang">

                            </a>
                        </div>
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
                                <li><a href="https://t.me/URDU_PRESSA" target="_blank"><i
                                                class="fa fa-telegram"></i></a>
                                </li>
                                <li><a href="http://mail.urdu.uz" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/urduuz" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCkQ8N0jtKR9VigB0FALuFvA"><i
                                                class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/urdumatbuotxizmati/"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/ursu_uz"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

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
                                    <div class="contact-icon">-->
                                        <a href="http://cam.urdu.uz/" style="color:white; "><i
                                                    class="fa fa-video-camera"></i></a>
                                    </div>
                                    <div class="contact-info">
                                        <span><a href="http://cam.urdu.uz/"
                                                 style="color:white; "><?= Yii::t('app', 'Video observation of <br> exams') ?></a></span>
                                    </div>
                                </li>
                                <!--                                <li>-->
                                <!--                                    <div class="contact-icon">-->
                                <!--                                        <i class="fa  fa-briefcase"></i>-->
                                <!--                                    </div>-->

                                <!--                                    //<div class="contact-info">-->
                                <!--                                    <p>--><?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?>
                                <!--                                    </p>-->
                                <!--                                    <span><a href="http://dl.urdu.uz/"-->
                                <!--                                             style="color:white; ">-->
                                <?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?><!--</a>-->
                                <!--                                    </span>-->
                                <?php //= Yii::t('app', 'Elektron ta\'lim tizimi') ?>
                                <!--                                    <p>-->
                                <!--                                           -->
                                <!---->
                                <!--                                            <a href="http://vacancy.urdu.uz" target="_blank"-->
                                <!--                                               style="color:white; ">-->
                                <? //= Yii::t('app', 'Bo`sh ish <br/>o`rinlari') ?><!--</a>-->
                                <!--                                        </p>-->

                                <!--                                    </div>-->
                                <!--                                </li>-->

                                <!-- <li>
                                     <div class="contact-icon">
                                         <a href="https://www.urdu.uz/site/active?id=92"><i
                                                     class="fa fa-calendar-check-o"></i></a>
                                     </div>
                                     <div class="contact-info">
                                         <p><a href="https://www.urdu.uz/site/active?id=92"
                                               style="color:white;">Ijodiy<br>imtihon</a>
                                         </p>
                                     </div>
                                 -->
                                <!--                                </li>-->
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
                                        <a href="https://www.urdu.uz/site/active?id=63"><i
                                                    class="fa fa-calendar"></i></a>
                                    </div>
                                    <div class="contact-info">
                                        <p><a href="<?=Url::to('/education/schedule')?>"
                                              style="color:white;">
                                                <?= Yii::t('app', 'Class <br> schedule') ?>
                                            </a>
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
                                            <?= Yii::t('app', 'Virtual reception') ?>
                                        </a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-id-card"></i>
                                    </div>
                                    <div class="contact-info">

                                    <span><a href="https://zaxirakadr.urdu.uz" target="_blank"
                                             style="color:white; ">
                                            <?= Yii::t('app', 'Submit an application <br>for job vacancies') ?>

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
                    $document = Yii::t('app', 'Documents');
                    $xfx = Yii::t('app', 'Ecology and environmental protection');
                    $kengash = AllCate::find()->where(['id' => 1])->one();
                    $xalqaro = AllCate::find()->where(['id' => 2])->one();
                    $moliya = AllCate::find()->where(['id' => 3])->one();
                    $manaviy = AllCate::find()->where(['id' => 4])->one();
                    $bakalovr = AllCate::find()->where(['id' => 5])->one();
                    $magistr = AllCate::find()->where(['id' => 6])->one();
                    $magistrs = AllCate::find()->where(['id' => 7])->one();
                    $bakalovrs = AllCate::find()->where(['id' => 8])->one();


                    $kengashall = \backend\models\AllAction::find()->where(['cate' => $kengash['id'], 'status' => 1])->all();
                    $xalqaroall = \backend\models\AllAction::find()->where(['cate' => $xalqaro['id'], 'status' => 1])->all();
                    $moliyaall = \backend\models\AllAction::find()->where(['cate' => $moliya['id'], 'status' => 1])->all();
                    $manaviyall = \backend\models\AllAction::find()->where(['cate' => $manaviy['id'], 'status' => 1])->all();

                    $magistrall = \backend\models\AllAction::find()->where(['cate' => 6, 'status' => 1])->orderBy(['position' => SORT_ASC])->all();
                    $bakalavralls = \backend\models\AllAction::find()->where(['cate' => 7, 'status' => 1])->all();
                    $magistralls = \backend\models\AllAction::find()->where(['cate' => 8, 'status' => 1])->all();
                    $xorijiyt = \backend\models\AllAction::find()->where(['cate' => 9, 'status' => 1])->all();
                    $transfers = \backend\models\AllAction::find()->where(['cate' => 19, 'status' => 1])->all();
                    $second = \backend\models\AllAction::find()->where(['cate' => 21, 'status' => 1])->all();
                    $docturate = \backend\models\AllAction::find()->where(['cate' => 22, 'status' => 1])->all();

                    $urls = substr($_SERVER['REQUEST_URI'], 0, 16);
                    $urlen = substr($_SERVER['REQUEST_URI'], 0, 14);
                    ?>

                    <!--Faoliyatni tugashi-->
                    <div class="col-md-11 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <ul id="navigation">
                                <li class="active" style="width: 60px">
                                    <a style="text-align: center;font-size: 25px"
                                       href="<?= Url::to(['/site/index']) ?>"><i
                                                class="fa fa-home"></i>
                                    </a>
                                </li>

                                <li><a href="<?= Url::to(['news/index']) ?>" class="menu1">
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
                                        <!--<li>
                                            <a href="<? /*= Url::to(['site/avtoreferat']) */ ?>">
                                                <? /*= Yii::t('app', 'Abstract') */ ?></a>
                                        </li>-->

                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= Url::to(['/site/about']) ?>">
                                        <?= Yii::t('app', 'University') ?>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="submenu" style="width: 250px">
                                        <li>
                                            <a href="<?= Url::to(['/site/about']) ?>">
                                                <?= Yii::t('app', 'History of University') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/nizom']) ?>">
                                                <?= Yii::t('app', 'Regulation of University') ?>
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
                                        <!-- 
											<li>
                                            <a href="#">
                                              <?php //= Yii::t('app', 'Centers and departments') ?>
                                                                                           Universitet ilmiy-amaliy muzeyi-->
                                        <?php //= Yii::t('app', 'Institutions under the auspices of the University') ?>
                                        <!--<ul class="submenu">
                                                    <li>
                                                        <a href="<?php //= Url::to(['museum/index']) ?>">
                                                            <?php //= Yii::t('app', 'Scientific-practical museum of Urgench state university') ?>
                                                            Urganch davlat universiteti ilmiy-amaliy muzeyi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </a>
                                        </li> -->
                                        <li>
                                            <a href="<?= Url::to(['/site/honorable']) ?>">
                                                <?= Yii::t('app', 'Honorable alumni') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/honorable1']) ?>">
                                                <?= Yii::t('app', 'Graduates of our school') ?>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#" class="menu1">
                                        <?= Yii::t('app', 'Activity') ?>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <a class="mega-title" href="#">
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
                                            <a class="mega-title" href="#">
                                                <i class="fa fa-bars"></i>
                                                <b><?= $xalqaro[$name] ?></b>
                                            </a>
                                            <ul>
                                                <?php foreach ($xalqaroall as $xal) { ?>

                                                    <li><a
                                                                href="<?= Url::to(['/site/active?id=' . $xal->id]) ?>"><i
                                                                    class="fa fa-caret-right"></i> <?= $xal[$title] ?>
                                                        </a>
                                                    </li>

                                                <?php } ?>
                                                <li>
                                                    <a href="<?= Url::to(['/site/viewcate?id=12']) ?>"><i
                                                                class="fa fa-caret-right"></i> MCOLE </a>
                                                </li>
                                                <li>
                                                    <a href="http://qtd.urdu.uz/"><i
                                                                class="fa fa-caret-right"></i> <?= Yii::t('app', 'Joint education program') ?>
                                                    </a>
                                                </li>

                                                <a class="mega-title" href="#">
                                                    <i class="fa fa-bars"></i>
                                                    <b><?= Yii::t('app', 'University recruitment') ?></b>
                                                </a>

                                                <li><a href="/site/vakursu"><i class="fa fa-caret-right"></i>
                                                        <?= Yii::t('app', 'Start-up procedure') ?></a>
                                                </li>
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
                                                $m1 = Yii::t('app', 'Cultural Events');
                                                $m2 = Yii::t('app', 'Sport events');
                                                $m3 = Yii::t('app', 'Students\' life');
                                                $m4 = Yii::t('app', 'Events of Youth Union');
                                                $m5 = Yii::t('app', 'Reforms - in the views of university team');
                                                $m6 = Yii::t('app', 'My opinion');
                                                ?>
                                                <li><a
                                                            href="<?= Url::to(['/site/viewcate?id=8']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m1 ?> </a>
                                                </li>
                                                <li><a
                                                            href="<?= Url::to(['/site/viewcate?id=10']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m2 ?> </a>
                                                </li>
                                                <li><a
                                                            href="<?= Url::to(['/site/viewcate?id=9']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m3 ?> </a>
                                                </li>
                                                <li><a
                                                            href="<?= Url::to(['/site/viewcate?id=11']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m4 ?> </a>
                                                </li>
                                                <li><a
                                                            href="<?= Url::to(['/site/active?id=94']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m5 ?> </a>
                                                </li>
                                                <li><a
                                                            href="<?= Url::to(['site/viewcate?id=14']) ?>"><i
                                                                class="fa fa-caret-right"></i> <?= $m6 ?> </a>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>

                                </li>
                                <li><a href="#" class="menu1"><?= Yii::t('app', 'Applicant') ?><i
                                                class="fa fa-angle-down"></i></a>

                                    <ul class="megamenu align-content-center" style="width: 1200px;">
                                        <li  style="width: 25%">
                                            <a class="mega-title" href="#" id="menu"><i class="fa fa-bars"></i>
                                                <b><?= $bakalovr[$name] ?></b></a>
                                            <ul>
                                                <!--<li>
                                                    <a href="<?= Url::to(['mandat/index']) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        Test sinovlar qaydnomasi
                                                    </a>
                                                </li> -->
                                                <li>
                                                    <a target="_blank"
                                                       href="https://mandat.dtm.uz/Home/Index/">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= Yii::t('app', 'Results of the entrant\'s mandate') ?>
                                                        <!--                                                        <sup style="color: red">-->
                                                        <? //= Yii::t('app', 'New') ?><!--</sup>-->
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
                                                                        class="fa fa-caret-right"></i> <?= $bak[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php else: ?>
                                                        <li><a
                                                                    href="<?= Url::to(['/site/active?id=' . $bak->id]) ?>"><i
                                                                        class="fa fa-caret-right"></i> <?= $bak[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php } ?>

                                                <!--<li>
                                                    <a href="<?= Url::to(['/site/active', 'id' => 112]) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        5 yil stajli qabul
                                                    </a>
                                                </li>-->
                                            </ul>
                                        </li>

                                        <li  style="width: 25%">
                                            <a class="mega-title" id="menu" href="#"><i class="fa fa-bars"></i>
                                                <b><?= $magistr[$name] ?></b></a>
                                            <ul>
                                                <!-- <li>
                                                    <a href="<?= Url::to(['student/magistr-mandat']) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        Magistraturaga kirish natijalari
                                                    </a>
                                                </li>-->
                                                <li>
                                                    <a target="_blank"
                                                       href="https://mandat.dtm.uz/Magistr/Magistr/">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= Yii::t('app', 'Results of the master\'s mandate') ?>
                                                        <!--                                                        <sup style="color: red">-->
                                                        <? //= Yii::t('app', 'New') ?><!--</sup>-->
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
                                                                    class="fa fa-caret-right"></i> <?= $mag[$title] ?>
                                                        </a>
                                                    </li>

                                                <?php } ?>
                                            </ul>
                                            <br><br>
                                            <hr>

                                        </li>
<!--                                        <li >-->
<!--                                            <a href="--><?//= Url::to(['student/call-center']) ?><!--">-->
<!--                                                <i class="fa fa-caret-right"></i>-->
<!--                                                --><?//= Yii::t('app', 'Call-center') ?>
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li  style="width: 25%">
                                            <a class="mega-title" href="#">
                                                <i class="fa fa-bars"></i>
                                                <b class="text-uppercase"><?= Yii::t('app', 'Transfer study') ?></b>
                                            </a>
                                            <ul>
                                                <?php
                                                //                                            unset($magistrall[6]);
                                                foreach ($transfers as $tran) { ?><?php if ($tran->id): ?>
                                                    <li><a
                                                                href="<?= Url::to(['/site/active?id=' . $tran->id]) ?>"><i
                                                                    class="fa fa-caret-right"></i> <?= $tran[$title] ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li  style="width: 25%">

                                            <a class="mega-title" href="#">
                                                <i class="fa fa-bars"></i>
                                                <b class="text-uppercase"><?= Yii::t('app', 'second higher education, 5 years of experience, joint education') ?></b>
                                            </a>
                                            <ul>
                                                <?php
                                                //                                            unset($magistrall[6]);
                                                foreach ($second as $sec) { ?><?php if ($sec->id): ?>
                                                    <li><a
                                                                href="<?= Url::to(['/site/active?id=' . $sec->id]) ?>"><i
                                                                    class="fa fa-caret-right"></i> <?= $sec[$title] ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <!--<li>
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
                                        </li>-->

                                        <!--<li>
                                            <a href="#" class="mega-title text-uppercase">
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
                                        </li>-->


                                    </ul>

                                </li>
                                <li>
                                    <a href="#" class="menu1"><?= Yii::t('app', 'Students') ?>
                                        <i class="fa fa-angle-down"></i>
                                    </a>

                                    <ul class="megamenu">
                                        <li>
                                            <a class="mega-title" href="#"><i class="fa fa-bars"></i>
                                                <b><?= $bakalovr[$name] ?></b></a>
                                            <ul>
                                                <?php foreach ($bakalavralls as $bak) { ?>
                                                    <?php if ($bak->id === 63) { ?>
                                                        <li>
                                                            <a href="<?= Url::to(['/education/bschedule']) ?>">
                                                                <i class="fa fa-caret-right"></i>
                                                                <?= $bak[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <?php if ($bak->id !== 63) { ?>
                                                        <li>
                                                            <a href="<?= Url::to(['/site/active?id=' . $bak->id]) ?>">
                                                                <i class="fa fa-caret-right"></i>
                                                                <?= $bak[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="mega-title" href="#"><i class="fa fa-bars"></i>
                                                <b><?= $magistr[$name] ?></b></a>
                                            <ul>
                                                <?php foreach ($magistralls as $mag) { ?>
                                                    <?php if ($mag->id === 86) { ?>
                                                        <li>
                                                            <a href="<?= Url::to(['/education/mschedule']) ?>">
                                                                <i class="fa fa-caret-right"></i>
                                                                <?= $mag[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <?php if ($mag->id !== 86) { ?>
                                                        <li>
                                                            <a href="<?= Url::to(['/site/active?id=' . $mag->id]) ?>">
                                                                <i class="fa fa-caret-right"></i>
                                                                <?= $mag[$title] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>

                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="mega-title" href="#">
                                                <i class="fa fa-bars"></i>
                                                <b class="text-uppercase"><?= Yii::t('app', 'TRANSFER STUDY') ?></b>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://transfer.edu.uz/<?= Yii::$app->language ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        <?= Yii::t('app', 'The transfer and recover study') ?>
                                                        <!--                                                        <sup style="color: red">-->
                                                        <? //= Yii::t('app','New')?><!--</sup>-->
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="mega-title" href="#"><i class="fa fa-bars"></i>
                                                        <b class="text-uppercase"><?= Yii::t('app', 'Doctorate') ?></b></a>
                                                    <ul>
                                                        <?php foreach ($docturate as $doc) { ?>
                                                                <li>
                                                                    <a href="<?= Url::to(['/site/active?id=' . $doc->id]) ?>">
                                                                        <i class="fa fa-caret-right"></i>
                                                                        <?= $doc[$title] ?>
                                                                    </a>
                                                                </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <!--                                                <li>-->
                                                <!--                                                    <a href="-->
                                                <? //= Url::to(['/transfer/index']) ?><!--">-->
                                                <!--                                                        <i class="fa fa-caret-right"></i>-->
                                                <!--                                                        OTMlardan UrDUga-->
                                                <!--                                                    </a>-->
                                                <!--                                                </li>-->
                                                <!--  <li>
                                                    <a href="<?php //echo Url::to(['/transfer/xorijiy']) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        Xorijiy OTMlardan UrDUga
                                                    </a>
                                                </li>-->
                                                <!--   <li>
                                                    <a href="<?php //echo Url::to(['/transfer/turdosh']) ?>">
                                                        <i class="fa fa-caret-right"></i>
                                                        Turdosh bo'lmagan yo'nalishlarga
                                                    </a>
                                                </li>-->


                                            </ul>
                                        </li>


                                    </ul>

                                </li>
                                <li>
                                    <a href="#" class="menu1"><?= Yii::t('app', 'Scientific & Innovative Activities') ?>
                                        <i class="fa fa-angle-down"></i>
                                    </a>

                                    <ul class="megamenu" style="width: 1200px;right: -455px;">

                                        <?php $cates = AllCate::find()->where(['id' => [14, 15, 16, 17]])->all();
                                        $nameLang = 'name_' . Yii::$app->language;
                                        $titleLang = 'title_' . Yii::$app->language;
                                        foreach ($cates as $item):?>
                                            <li style="width: 25%">

                                                <a class="mega-title" href="#">
                                                    <b><?= $item->$nameLang ?></b>
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <ul>
                                                    <?php foreach ($item->allAction as $value): ?>
                                                        <li>
                                                            <a href="<?= Url::to(['site/active', 'id' => $value->id]) ?>">
                                                                <?= $value->$titleLang ?>
                                                                <i class="fa fa-caret-right"></i>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; ?>


                                    </ul>
                                </li>
                                <li>
                                    <a class="menu1" href="<?= Url::to(['site/active', 'id' => 48]) ?>">
                                        <?= Yii::t('app', 'International students') ?>
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
                                <!--                            --><?php //if (Yii::$app->language != 'ru'): ?>
                                <!--                                <li><a href="-->
                                <? //= Url::to(['/site/about']) ?><!--">-->
                                <!--                                        --><? //= $document[$title] ?>
                                <!--                                        <i class="fa fa-angle-down"></i>-->
                                <!--                                    </a>-->
                                <!--                                    <ul class="submenu" style="width: 250px">-->
                                <!--                                        --><?php
                                //                                        $doc1 = array('title_uz' => 'Prezident farmon va qarorlari', 'title_ru' => 'Указы и постановления Президента', 'title_en' => 'Decrees of the President');
                                //                                        $doc2 = array('title_uz' => 'Xukumat qaror va dasturlari', 'title_ru' => 'Постановления и программы правительства', 'title_en' => 'Decrees and Programs of Government');
                                //                                        $doc3 = array('title_uz' => "Me'yoriy-huquqiy hujjatlar", 'title_ru' => 'Нормативные документы ', 'title_en' => 'Regulatory documents of University');
                                //                                        ?>
                                <!--                                        <li>-->
                                <!--                                            <a href="https://urdu.uz/file/ЎРҚ-637-сон 23.09.2020-compressed.pdf" target="_blank">-->
                                <!--                                                Ta'lim to'g'risidagi qonun-->
                                <!--                                            </a>-->
                                <!--                                        </li>-->
                                <!--                                        <li>-->
                                <!--                                            <a href="http://lex.uz/search/all?body_id=739&fbody_id=815">-->
                                <!--                                                -->
                                <? //= $doc1[$title] ?><!--</a>-->
                                <!--                                        </li>-->
                                <!--                                        <li>-->
                                <!--                                            <a href="http://lex.uz/search/nat?body_id=739&fform_id=3972">-->
                                <!--                                                --><? //= $doc2[$title] ?>
                                <!--                                            </a>-->
                                <!--                                        </li>-->
                                <!--                                        <li>-->
                                <!--                                            <a href="-->
                                <? //= Url::to(['/site/normative']) ?><!--">-->
                                <!--                                                --><? //= $doc3[$title] ?>
                                <!--                                            </a>-->
                                <!--                                        </li>-->
                                <!--                                    </ul>-->
                                <!--                                </li>-->
                                <!--                            --><?php //endif; ?>
                                <?php
                                $inter = array('title_uz' => 'Interaktiv xizmatlar', 'title_ru' => 'Интерактивные услуги', 'title_en' => 'Interactive service');

                                ?>
                                <!--                            <li><a href="" class="menu1">-->
                                <? //= $inter[$title] ?><!--<i class="fa fa-angle-down"></i></a>-->
                                <!--                                <ul class="submenu" style="width: 250px">-->
                                <!--                                    --><?php
                                //
                                //                                    $ints = \backend\models\Interaktive::find()->all();
                                //                                    $name = "name_" . Yii::$app->language;
                                //                                    foreach ($ints as $int) {
                                //                                        ?>
                                <!--                                        <li><a href="-->
                                <? //= $int['url'] ?><!--">--><? //= $int[$name] ?><!--</a></li>-->
                                <!--                                    --><?php //} ?>
                                <!---->
                                <!--                                </ul>-->
                                <!--                            </li>-->
                                <?php if (Yii::$app->language == 'uz'): ?>
                                    <li>
                                        <?= Html::a(Yii::t('app', 'Masofaviy ta\'lim') . " <i class='fa fa-angle-down'></i>", '#', ['class' => 'menu1']) ?>
                                        <ul class="submenu">
                                            <li><?= Html::a(Yii::t('app', 'News'), ['education/news']) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Me\'yoriy hujjatlar'), ['education/normative']) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Dars jadvallari'), ['education/schedule']) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Zoom'), ['education/schedule']) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Metodik ko‘rsatmalar'), ['education/metodic']) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'dl.urdu.uz'), 'http://dl.urdu.uz') ?></li>
                                            <li><?= Html::a(Yii::t('app', 'olimp.urdu.uz'), 'http://olimp.urdu.uz') ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Hemis haqıda to\'lıq ma\'lumotlar'), 'https://hemis.uz/yoriqnoma/git add') ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Hemis bo\'yicha yo\'riqnomalar va video materiallar telegram kanalı'), 'https://t.me/hemis_university') ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Hemis bo\'yicha muhokama telegram gruppasi'), 'https://t.me/HEMIS_UMUMIY') ?></li>
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
<?php

$css = <<<CSS
	    
        .st {

            font-family: Arial;
            font-size: 16px;

        }

        .h {

            line-height: 28px;
            margin-bottom: 19px;
            font-family: "Open Sans", Verdana;
            font-weight: 600;
            font-style: normal;
            text-transform: none !important;
            overflow-wrap: break-word;
            margin-top: 0em;
            font-size: 16px;

        }

        .t {

            font-family: Georgia;
            font-size: 20px;

        }

        .menu {

            font-family: Georgia;
            font-size: 13px;

        }

        .menu1 {

            font-family: Arial;
            color: rgba(30, 38, 52, 0.77);
            font-size: 14px;

        }
    
CSS;
$this->registerCss($css);