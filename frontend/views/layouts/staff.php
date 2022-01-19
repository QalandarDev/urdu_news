<?php

/* @var $this \yii\web\View */
/* @var $content string */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAssetsstaff;
use common\widgets\Alert;

AppAssetsstaff::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <meta name="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <?php $this->registerCsrfMetaTags() ?>
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script src="https://www.googletagmanager.com/gtag/js?id=UA-137157104-1" async=""></script>
	<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-137157104-1');</script>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php

$title = "title_";
$title .= Yii::$app->language;
$contact = Yii::t('app', 'Contact');
$send =  Yii::t('app', 'Send article');

?>


<div class="wrap">
    <div class="search-area">
    <span class="closs-btn">Close</span>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="search-form">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search Here">
                        <button type="button" name="button" class="btn-style">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-area -->
    <!-- heared area start -->

    <header class="header-area">
        <div class="header-top bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <?php
                            $ursu = Yii::t('app','URGENCH STATE UNIVERSITY');
                            ?>
                            
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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
                        <div class="logo" style="margin-top:7px;margin:5px 0px 0px -5px">
                            <a href="<?= Url::to(['/site/index'])?>"><img src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/images/96D6F2E7E1F705AB5E59C84A6DC009B2.png" style="width: 70px" alt=""></a>
						
                        </div>
						
                    </div>
					<div class="col-md-2 hidden-sm hidden-xs" style="margin:0px 0px 0px -30px">
                        <div class="logo" style="margin-top:12px">
							<b><p ><?=$ursu?></p></b>
							
                        </div>
                    </div>
					<div class="col-md-1 hidden-sm hidden-xs">
                        <div class="logo" style="margin-top:15px">
                          							
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <?php
                        $qabulxona = Yii::t('app','VIRTUAL RECEPTION');
                        $email = Yii::t('app','E-MAIL');
                        $tel= Yii::t('app','PHONE');
                        $aloqa= Yii::t('app','CONTACT-US');
                        ?>
                        <div class="header-middle-right">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p><?=$aloqa?></p>
                                        <span><?=$qabulxona?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p><?=$email?></p>
                                         <span><a href="mailto:info@urdu.uz" style="color:white;">info@urdu.uz</a> </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p><?=$tel?></p>
                                        <span> +99862 2246700</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom fixed-top"  id="sticky-header" >
            <div class="container">
                <div class="row">
                    <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                        <div class="logo">
                            <img src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/images/96D6F2E7E1F705AB5E59C84A6DC009B2.png" style="width: 70px" alt="">
                        </div>
                    </div>

                    <!--Tuzulma-->
                    <?php

                    $home = Yii::t('app','Home');
                    $news = Yii::t('app','News');
                    $events = Yii::t('app','Events');
                    $tuzilma = Yii::t('app','STRUCTURE');
                    $univer = Yii::t('app','History of University');
                    $nizom = Yii::t('app','Regulation of University');
                    $rektorat = Yii::t('app','Rectorate');
                    $faculty = Yii::t('app','Faculties');
                    $department = Yii::t('app','Departments');
                    $center = Yii::t('app','Centers and departments');

                    ?>
                    <!--Tuzulmani tugashi-->

                    <!--Faoliyat-->

                    <?php
                    $faoliyat = Yii::t('app','Activity');
                    $abuturent = Yii::t('app','Applicant');
                    $talaba = Yii::t('app','Student');
                    $xorijiy = Yii::t('app','International students');
                    $document = Yii::t('app','Documents');
                    $galerys = Yii::t('app','Photo gallery');
					
                    $kengash=\backend\models\AllCate::find()->where(['id'=>1])->one();
                    $xalqaro=\backend\models\AllCate::find()->where(['id'=>2])->one();
                    $moliya=\backend\models\AllCate::find()->where(['id'=>3])->one();
                    $manaviy=\backend\models\AllCate::find()->where(['id'=>4])->one();
                    $bakalovr=\backend\models\AllCate::find()->where(['id'=>5])->one();
                    $magistr=\backend\models\AllCate::find()->where(['id'=>6])->one();
                    $magistrs=\backend\models\AllCate::find()->where(['id'=>7])->one();
                    $bakalovrs=\backend\models\AllCate::find()->where(['id'=>8])->one();
                    $name="name_".Yii::$app->language;
                    $kengashall = \backend\models\AllAction::find()->where(['cate'=>$kengash['id']])->all();
                    $xalqaroall = \backend\models\AllAction::find()->where(['cate'=>$xalqaro['id']])->all();
                    $moliyaall = \backend\models\AllAction::find()->where(['cate'=>$moliya['id']])->all();
                    $manaviyall = \backend\models\AllAction::find()->where(['cate'=>$manaviy['id']])->all();
                    $bakalavrall = \backend\models\AllAction::find()->where(['cate'=>5])->all();
                    $magistrall = \backend\models\AllAction::find()->where(['cate'=>6])->all();
                    $bakalavralls = \backend\models\AllAction::find()->where(['cate'=>7])->all();
                    $magistralls = \backend\models\AllAction::find()->where(['cate'=>8])->all();
                    $xorijiyt = \backend\models\AllAction::find()->where(['cate'=>9])->all();
                    $title="title_".Yii::$app->language;
                    $urls=substr($_SERVER['REQUEST_URI'],0,16);
                    $urlen=substr($_SERVER['REQUEST_URI'],0,14);
                    ?>

                    <!--Faoliyatni tugashi-->
                    <div class="col-md-11 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <ul id="navigation" >
                                <li class="active" style="width: 60px"><a style="text-align: center;font-size: 25px" href="<?= Url::to(['/site/index'])?>"><i class="fa fa-home"> </i></a></li>
                                <li><a  href="<?= Url::to(['/site/news'])?>"><?=$news?></b><i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="<?= Url::to(['/site/news'])?>"><?=$news?></a></li>
                                        <li><a href="<?= Url::to(['/site/events'])?>"><?=$events?></a></li>
                                        <li><a href="<?= Url::to(['/site/gallery'])?>"><?=$galerys?></a></li>
                                    </ul>
                                </li>
                                <li><a  href="<?= Url::to(['/site/about'])?>"><?=$tuzilma?><i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu"  style="width: 250px">
                                        <li><a href="<?= Url::to(['/site/about'])?>"><?=$univer?></a></li>
                                        <li><a href="<?= Url::to(['/site/nizom'])?>"><?=$nizom?></a></li>
                                        <li><a href="<?= Url::to(['/site/rektorat'])?>"><?=$rektorat?></a></li>
                                        <li><a href="<?= Url::to(['/site/faculty'])?>"><?=$faculty?></a></li>
                                        <li><a href="<?= Url::to(['/site/department'])?>"><?=$department?></a></li>
                                        <li><a href="<?= Url::to(['/site/center'])?>"><?=$center?></a></li>
                                    </ul>
                                </li>
                                <li><a  href="#"><?=$faoliyat?><i class="fa fa-angle-down"></i></a>

                                    <ul class="megamenu">
                                        <li>
                                            <a  class="mega-title" href="#" id="menu"><i class="fa fa-bars"></i> <b><?=$kengash[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($kengashall as $keng){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$keng->id])?>"><i class="fa fa-caret-right"></i> <?=$keng[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="mega-title" id="menu"  href="#"><i class="fa fa-bars"></i> <b><?=$xalqaro[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($xalqaroall as $xal){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$xal->id])?>"><i class="fa fa-caret-right"></i> <?=$xal[$title]?></a></li>

                                                <?php }?>
												<li><a id="menu1" href="<?= Url::to(['/site/viewcate?id=12'])?>"><i class="fa fa-caret-right"></i> MCOLE </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="mega-title" id="menu"  href="#"><i class="fa fa-bars"></i> <b><?=$moliya[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($moliyaall as $moliya){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$moliya->id])?>"><i class="fa fa-caret-right"></i> <?=$moliya[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="mega-title" id="menu"  href="#"><i class="fa fa-bars"></i> <b><?=$manaviy[$name]?></b></a>
                                            <ul>
                                                
											<?php
                                            $m1 = Yii::t('app','Cultural Events');
                                            $m2 = Yii::t('app','Sport events');
                                            $m3 =Yii::t('app','Students\' life');
                                            $m4 = Yii::t('app','Events of Youth Union');
                                            $m5 = Yii::t('app','Reforms - in the views of university team');
                                            $m6 = Yii::t('app','My opinion');
												?>
                                                    <li><a id="menu1" href="<?= Url::to(['/site/viewcate?id=8'])?>"><i class="fa fa-caret-right"></i> <?=$m1?> </a></li>
												    <li><a id="menu1" href="<?= Url::to(['/site/viewcate?id=9'])?>"><i class="fa fa-caret-right"></i> <?=$m2?> </a></li>
													<li><a id="menu1" href="<?= Url::to(['/site/viewcate?id=10'])?>"><i class="fa fa-caret-right"></i> <?=$m3?> </a></li>
												    <li><a id="menu1" href="<?= Url::to(['/site/viewcate?id=11'])?>"><i class="fa fa-caret-right"></i> <?=$m4?> </a></li>
												    <li><a id="menu1" href="<?= Url::to(['/site/active?id=94'])?>"><i class="fa fa-caret-right"></i> <?=$m5?> </a></li>
												 	<li><a id="menu1" href="<?= Url::to(['site/viewcate?id=14'])?>"><i class="fa fa-caret-right"></i> <?=$m6?> </a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </li>
                                <li><a  href="#"><?=$abuturent?><i class="fa fa-angle-down"></i></a>

                                    <ul class="megamenu2">
                                        <li>
                                            <a  class="mega-title" href="#" id="menu"><i class="fa fa-bars"></i> <b><?=$bakalovr[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($bakalavrall as $bak){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$bak->id])?>"><i class="fa fa-caret-right"></i> <?=$bak[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="mega-title" id="menu"  href="#"><i class="fa fa-bars"></i> <b><?=$magistr[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($magistrall as $mag){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$mag->id])?>"><i class="fa fa-caret-right"></i> <?=$mag[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>


                                    </ul>

                                </li>
                                <li><a  href="#"><?=$talaba?><i class="fa fa-angle-down"></i></a>

                                    <ul class="megamenu1">
                                        <li>
                                            <a  class="mega-title" href="#" id="menu"><i class="fa fa-bars"></i> <b><?=$bakalovr[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($bakalavralls as $bak){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$bak->id])?>"><i class="fa fa-caret-right"></i> <?=$bak[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="mega-title" id="menu"  href="#"><i class="fa fa-bars"></i> <b><?=$magistr[$name]?></b></a>
                                            <ul>
                                                <?php foreach ($magistralls as $mag){?>

                                                    <li><a id="menu1" href="<?= Url::to(['/site/active?id='.$mag->id])?>"><i class="fa fa-caret-right"></i> <?=$mag[$title]?></a></li>

                                                <?php }?>
                                            </ul>
                                        </li>


                                    </ul>

                                </li>
                                <li><a  href="<?= Url::to(['/site/about'])?>"><?=$xorijiy?><i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu"  style="width: 250px">
                                        <?php foreach ($xorijiyt as $mag){?>
                                        <li><a href="<?= Url::to(['/site/active?id='.$mag->id])?>"><?=$mag[$title]?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a  href="<?= Url::to(['/site/about'])?>"><?=$document?><i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu"  style="width: 250px">
                                       <?php
                                       $doc1 = Yii::t('app','Decrees of the President');
                                       $doc2 = Yii::t('app','Decrees and Programs of Government');
                                       $doc3 = Yii::t('app','Regulatory documents of University');
                                       ?>
                                          <li><a href="http://lex.uz/search/all?body_id=739&fbody_id=815"><?=$doc1?></a></li>
                                        <li><a href="http://lex.uz/search/nat?body_id=739&fform_id=3972"><?=$doc2?></a></li>
                                        <li><a href="<?= Url::to(['/site/normative'])?>"><?=$doc3?></a></li>

                                    </ul>
                                </li>
						<?php
                                      $inter = Yii::t('app','Interactive service');
                                     
                                       ?>
									<li><a  href=""><?=$inter?><i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu"  style="width: 250px">
                                       <?php 
										
										$ints = \backend\models\Interaktive::find()->all();
										$name="name_".Yii::$app->language;
										foreach ($ints as $int){
										?>
                                          <li><a href="<?=$int['url']?>"><?=$int[$name]?></a></li>
                                        <?php }?>

                                    </ul>
                                </li>


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


    <div class="single-service-area ptb-100" style="margin-top: -100px">

        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12 page-content">
                    
                  
                    <?= $content ?>


                </div>
				

            </div>
        </div>
    </div>



    </div>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
                    <div class="footer-widget footer-logo">
                        <?php
                        $ursu = Yii::t('app','Urgench State University');
                        $ursumanzil = Yii::t('app','Urgench State University');
                        ?>
                        <h4 style="color: white"><?=$ursu?></h4>
                        <p> 14, Kh.Alimdjan str, Urgench city,
                            220100, Uzbekistan</p>
                        <ul>
                            <li><i class="fa fa-phone"></i> +998 62 224 6700</li>
                            <li><i class="fa fa-envelope"></i> info@urdu.uz</li>
                            <li><i class="fa fa-bus"></i> Bus 7,13,28</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-widget footer-menu">
                        <h2><?=$tuzilma?></h2>
                        <ul>
                                   		<li><a href="<?= Url::to(['/site/about'])?>"><?=$univer?></a></li>
                                        <li><a href="<?= Url::to(['/site/nizom'])?>"><?=$nizom?></a></li>
                                        <li><a href="<?= Url::to(['/site/rektorat'])?>"><?=$rektorat?></a></li>
                                        <li><a href="<?= Url::to(['/site/faculty'])?>"><?=$faculty?></a></li>
                                        <li><a href="<?= Url::to(['/site/department'])?>"><?=$department?></a></li>
                                        <li><a href="<?= Url::to(['/site/center'])?>"><?=$center?></a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-widget footer-menu">
                        <h2><?=$xorijiy?></h2>
                        <ul>
                          <?php foreach ($xorijiyt as $mag){?>
                                        <li><a href="<?= Url::to(['/site/active?id='.$mag->id])?>"><?=$mag[$title]?></a></li>
                                        <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-widget quick-contact">
                        <h2>Quick Contact</h2>
                        <form action="#">
                            <input type="text" placeholder="Full Name">
                            <input type="email" placeholder="Email">
                            <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Massage"></textarea>
                            <button type="button" name="button" class="btn-style">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="row">
                <div class="col-md-6">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright UrSU &copy;<script>document.write(new Date().getFullYear());</script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
				<div class="col-md-6" style="text-align:right">
<!-- START WWW.UZ TOP-RATING -->
<SCRIPT language="javascript" type="text/javascript">
                            <!--
                                top_js="1.0";top_r="id=29603&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
                                //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.1" type="text/javascript">
                                <!--
                                    top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
                                    //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.2" type="text/javascript">
                                <!--
                                    top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
                                        (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
                                    //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.3" type="text/javascript">
                                <!--
                                    top_js="1.3";
                                //-->
                            </SCRIPT>
                            <SCRIPT language="JavaScript" type="text/javascript">
                                <!--
                                    top_rat="&col=0063AF&t=ffffff&p=DD7900";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top></a>')//-->
                            </SCRIPT><NOSCRIPT><a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top><IMG height=31 src="http://www.uz/plugins/top_rating/count/nojs_cnt.png?id=29603&pg=http%3A//urdu.uz&col=0063AF&t=ffffff&p=DD7900" width=88 border=0 alt="Топ рейтинг www.uz"/></a>
                            
                            </NOSCRIPT><!-- FINISH WWW.UZ TOP-RATING --> 
<!-- END WWW.UZ TOP-RATING --> 
					
<!--Start Yandex.Metrika informer -->
<a href="https://metrika.yandex.com/stat/?id=55254439&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55254439/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="55254439" data-lang="ru" /></a>
<noscript><div><img src="https://mc.yandex.ru/watch/55254439" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!--End Yandex.Metrika informer -->
				</div>
            </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<!--<div class="snowflakes" aria-hidden="true">-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❅-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❆-->
<!--    </div>-->
<!--    <div class="snowflake" style="color:#7bc7f5">-->
<!--        ❄-->
<!--    </div>-->
<!--</div>-->
<!--<style>-->
<!--    @-webkit-keyframes snowflakes-fall {-->
<!--        0% {-->
<!--            top: -10%-->
<!--        }-->
<!--        100% {-->
<!--            top: 100%-->
<!--        }-->
<!--    }-->
<!---->
<!--    @-webkit-keyframes snowflakes-shake {-->
<!--        0% {-->
<!--            -webkit-transform: translateX(0px);-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--        50% {-->
<!--            -webkit-transform: translateX(80px);-->
<!--            transform: translateX(80px)-->
<!--        }-->
<!--        100% {-->
<!--            -webkit-transform: translateX(0px);-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--    }-->
<!---->
<!--    @keyframes snowflakes-fall {-->
<!--        0% {-->
<!--            top: -10%-->
<!--        }-->
<!--        100% {-->
<!--            top: 100%-->
<!--        }-->
<!--    }-->
<!---->
<!--    @keyframes snowflakes-shake {-->
<!--        0% {-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--        50% {-->
<!--            transform: translateX(80px)-->
<!--        }-->
<!--        100% {-->
<!--            transform: translateX(0px)-->
<!--        }-->
<!--    }-->
<!---->
<!--    .snowflake {-->
<!--        font-size: 2em;-->
<!--        position: fixed;-->
<!--        top: -10%;-->
<!--        z-index: 9999;-->
<!--        -webkit-user-select: none;-->
<!--        -moz-user-select: none;-->
<!--        -ms-user-select: none;-->
<!--        user-select: none;-->
<!--        cursor: default;-->
<!--        -webkit-animation-name: snowflakes-fall, snowflakes-shake;-->
<!--        -webkit-animation-duration: 10s, 3s;-->
<!--        -webkit-animation-timing-function: linear, ease-in-out;-->
<!--        -webkit-animation-iteration-count: infinite, infinite;-->
<!--        -webkit-animation-play-state: running, running;-->
<!--        animation-name: snowflakes-fall, snowflakes-shake;-->
<!--        animation-duration: 10s, 3s;-->
<!--        animation-timing-function: linear, ease-in-out;-->
<!--        animation-iteration-count: infinite, infinite;-->
<!--        animation-play-state: running, running-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(0) {-->
<!--        left: 1%;-->
<!--        -webkit-animation-delay: 0s, 0s;-->
<!--        animation-delay: 0s, 0s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(1) {-->
<!--        left: 10%;-->
<!--        -webkit-animation-delay: 1s, 1s;-->
<!--        animation-delay: 1s, 1s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(2) {-->
<!--        left: 20%;-->
<!--        -webkit-animation-delay: 6s, .5s;-->
<!--        animation-delay: 6s, .5s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(3) {-->
<!--        left: 30%;-->
<!--        -webkit-animation-delay: 4s, 2s;-->
<!--        animation-delay: 4s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(4) {-->
<!--        left: 40%;-->
<!--        -webkit-animation-delay: 2s, 2s;-->
<!--        animation-delay: 2s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(5) {-->
<!--        left: 50%;-->
<!--        -webkit-animation-delay: 8s, 3s;-->
<!--        animation-delay: 8s, 3s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(6) {-->
<!--        left: 60%;-->
<!--        -webkit-animation-delay: 6s, 2s;-->
<!--        animation-delay: 6s, 2s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(7) {-->
<!--        left: 70%;-->
<!--        -webkit-animation-delay: 2.5s, 1s;-->
<!--        animation-delay: 2.5s, 1s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(8) {-->
<!--        left: 80%;-->
<!--        -webkit-animation-delay: 1s, 0s;-->
<!--        animation-delay: 1s, 0s-->
<!--    }-->
<!---->
<!--    .snowflake:nth-of-type(9) {-->
<!--        left: 90%;-->
<!--        -webkit-animation-delay: 3s, 1.5s;-->
<!--        animation-delay: 3s, 1.5s-->
<!--    }-->
<!---->
<!--    /* Demo Purpose Only*/-->
<!--    .demo {-->
<!--        font-family: 'Raleway', sans-serif;-->
<!--        color: #fff;-->
<!--        display: block;-->
<!--        margin: 0 auto;-->
<!--        padding: 15px 0;-->
<!--        text-align: center;-->
<!--    }-->
<!---->
<!--    .demo a {-->
<!--        font-family: 'Raleway', sans-serif;-->
<!--        color: #000;-->
<!--    }-->
<!--</style>-->
</body>
</html>
<?php $this->endPage() ?>

<SCRIPT language="javascript" type="text/javascript">
                            <!--
                                top_js="1.0";top_r="id=29603&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
                                //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.1" type="text/javascript">
                                <!--
                                    top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
                                    //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.2" type="text/javascript">
                                <!--
                                    top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
                                        (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
                                    //-->
                            </SCRIPT>
                            <SCRIPT language="javascript1.3" type="text/javascript">
                                <!--
                                    top_js="1.3";
                                //-->
                            </SCRIPT>
                            <SCRIPT language="JavaScript" type="text/javascript">
                                <!--
                                    top_rat="&col=0063AF&t=ffffff&p=DD7900";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top></a>')//-->
                            </SCRIPT>
<!--End kod www.uz script -->
<!--Start kod Yandex Analytics script -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55254439, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<!--End kod Yandex Analytics script -->









<style>
    #st{

        font-family: Arial;
        font-size: 16px;
   
    }
    #h{

        font-family: Georgia;
        font-size: 20px;


    }
    #menu{

        font-family: Georgia;
        font-size: 13px;

    }
    #menu1{

        font-family: Arial;
        color: rgba(30, 38, 52, 0.77);
        font-size: 15px;

    }
</style>

