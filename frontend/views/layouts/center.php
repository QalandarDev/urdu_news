<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <meta name="Urganch davlat universiteti" content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<?php

$contact = Yii::t('app','Contact');
$send = Yii::t('app','Send article');

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
    <?= $this->render('_menu');?>
    <!-- heared area end -->

    <!-- heared area end -->

    <div class="single-service-area ptb-100" style="margin-top: -100px">
<!--        <div class="breadcumb-area black-opacity bg-img-5">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12">-->
<!--                        <div class="breadcumb-wrap">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
        <?php
        $url = $_SERVER['REQUEST_URI'];
        $centers = \backend\models\Center::find()->where(['cate'=>3])->all();
        $name="name_".Yii::$app->language;
        $text="content_".Yii::$app->language;
        $bulim = Yii::t('app','Centres and departments');
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
        $title12 ="title_".Yii::$app->language;
        $havola= Yii::t('app','Quick links') ;
        ?>
        <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05);"><b><?=$bulim?></b></a></li>


                                <?php foreach ($centers as $centerr){?>

                                    <li  <?php if($url =="/frontend/web/uz/site/centerview?id=$centerr->id" ||$url =="/frontend/web/site/centerview?id=$centerr->id" ||$url =="/frontend/web/ru/site/centerview?id=$centerr->id"){ echo "class=\"active\""; }?>><a style="font-family: Arial;font-size: 12px" href="<?=\yii\helpers\Url::to(['/site/centerview?id='.$centerr->id])?>"><?=$centerr[$name]?></a></li>

                                <?php }?>

                            </ul>
                        </div>

                    </aside>
                    <aside class="service-sidebar">
                        <div class="sidebar-menu">
                            <ul>
                                <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b><?=$havola?></b></a></li>
                                <li ><a href="<?=\yii\helpers\Url::to(['/site/about'])?>"><?=$univer?></a></li>
                                <li ><a  href="<?=\yii\helpers\Url::to(['/site/nizom'])?>"><?=$nizom?></a></li>
                                <li ><a  href="<?=\yii\helpers\Url::to(['/site/rektorat'])?>"><?=$rektorat?></a></li>
                                <li ><a  href="<?=\yii\helpers\Url::to(['/site/faculty'])?>"><?=$faculty?></a></li>
                                <li ><a  href="<?=\yii\helpers\Url::to(['/site/department'])?>"><?=$department?></a></li>
                                <li ><a  href="<?=\yii\helpers\Url::to(['/site/center'])?>"><?=$center?></a></li>

                            </ul>
                        </div>

                    </aside>
					
                </div>
				
                <div class="col-md-9">
					
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
					
                    <?= Alert::widget() ?>
                    <?= $content ?>

<!--                    </div>-->
                </div>

            </div>
        </div>
		
    </div>



    </div>

       <?= $this->render('_footer');?> 

<?php $this->endBody() ?>
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

<!--Start kod Google Analytics script -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137157104-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137157104-1');
</script>
<!--End kod Google Analytics script -->







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

