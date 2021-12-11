</div>
<?php

/* @var $this yii\web\View */

$titlepage = Yii::t('app','Urgench State University');

$galerys =Yii::t('app','Photo gallery');
$this->title = $titlepage;
?>
<hr style="margin-top: -90px">
<!-- porftolio-area start -->
<section class="porftolio-area" style="padding: 5px">
    <div class="">



<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-10  col-xs-12">
            <div class="section-title section-title2">
                <h2 id="h"><?=$galerys?></>

            </div>
        </div>
    </div>
        <p ><?= \yii\widgets\LinkPager::widget(['pagination' => $pages,]);?></p>
</div>
	   <div class="container">
        <div class="row">
            <?php
            foreach ($galery as $g){
            ?>
            <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col wow fadeInUp"  data-wow-delay=".1s">
                <div class="portfolio-wrap">
                    <div class="overlay">
                        <a class="popup" href="<?=$home?>/images/<?=$g['img']?>">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><?=$g[$galt]?></h3>
                        <p><?=$g[$galte]?></p>
                    </div>
                    <div class="portfolio-img">
                        <img src="/backend/web/images/<?=$g['img']?>" alt="<?=$titlepage?>" style="height:400px" alt="" />
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
	</div>
    </div>

</section>
<!-- porftolio-area end -->



<!-- video-area start -->
<section  class="video-area  parallax black-opacity wow fadeInUp"  data-speed="5" data-bg-image="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/images/slider/newsmall.jpg">
    <h2 class="hidden">Video area</h2>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="video-wrap text-center">
                            <a href="<?=Yii::$app->request->baseUrl?>/vidio/vidio.mp4" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- newsletter-area end -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->

<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/owl.carousel.min.js"></script>
<!-- counterup.main.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/counterup.main.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/isotope.pkgd.min.js"></script>
<!-- jquery.waypoints.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/jquery.waypoints.min.js"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/jquery.magnific-popup.min.js"></script>
<!-- jquery.slicknav.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/jquery.slicknav.min.js"></script>
<!-- snake.min.js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/snake.min.js"></script>
<!-- wow js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/plugins.js"></script>
<!-- main js -->
<script src="<?=Yii::$app->request->baseUrl?>/martxa/martxa/assets/js/scripts.js"></script>

<style>
    #st{

        font-family: Arial;
        font-size: 13px;
    }
    #h{

        font-family: Georgia;
        font-size: 20px;

    }

</style>
	<div class="snowflakes" aria-hidden="true">
    <div class="snowflake" style="color:white">
        ❅
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake" style="color:white">
        ❆
    </div>
    <div class="snowflake">
        ❄
    </div>
    <div class="snowflake"  style="color:white">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake"  style="color:white">
        ❄
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake"  style="color:white">
        ❆
    </div>
    <div class="snowflake">
        ❄
    </div>
</div>


<style>
       @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0px);transform:translateX(0px)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}100%{-webkit-transform:translateX(0px);transform:translateX(0px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%{transform:translateX(0px)}50%{transform:translateX(80px)}100%{transform:translateX(0px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}
    /* Demo Purpose Only*/
    .demo {
        font-family: 'Raleway', sans-serif;
        color:#fff;
        display: block;
        margin: 0 auto;
        padding: 15px 0;
        text-align: center;
    }
    .demo a{
        font-family: 'Raleway', sans-serif;
        color: #000;
    }
</style>