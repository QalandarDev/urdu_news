<?php
/* @var $this \yii\web\View */
/* @var $home string */
$this->registerAssetBundle(yii\web\JqueryAsset::className(), \yii\web\View::POS_HEAD);
$titlelang = Yii::t('app','Centres and departments');
$phone = Yii::t('app','Phone:');
$email = Yii::t('app','Email:');
$titlenews = Yii::t('app','News');
$titleevents = Yii::t('app','Events');
$aboutall = Yii::t('app', 'About');
$aboutall1 = Yii::t('app','Staff');
$titlepage = Yii::t('app','Urgench State University');
$this->title = Yii::t('app', 'Centres and departments');
//$mytext['uz']="Markazlar va bo'limlar";
//$mytext['ru']="Центры и отделы";
//$mytext['en']="Centres and departments";

$this->params['breadcrumbs'][] = ['label' =>$this->title, 'url' => ['/site/center']];

$this->params['breadcrumbs'][] =  ['label'=>$model[$name],'template' => "<li><b>{link}</b></li>\n"];
?>

<!-- porftolio-area start -->

<section >
    <div class="">
        <div class="row">
            <div class="col-xs-12">
                <div class="portfolio-menu ">
					<button style="padding: 8px" onclick="myFunction()" class="active"  data-filter=".clean1"><?=$aboutall1?></button>
                    <button  onclick="myFunction1()"  data-filter=".clean"><?=$aboutall?></button>


                </div>
            </div>
        </div>
        <div class="row grid" >
			<div class="col-md-12 portfolio clean1 col-sm-12 col-xs-12 col" id="myDIV">
                

                        <div class="row">
                            <?php foreach ($hodim as $views) {?>
                                <div class="col-md-12" style=" padding: 20px 0px;" >
                                   
                                                <div  style="float:left">
                                                    <img src="<?=$home?>/hodimlar/<?=$views['img']?>" alt="<?=$titlepage?>"  alt="<?=$views[$name]?>" style="
    height: 200px;
    width: 200px;
    object-fit: cover;
    margin-right: 50px;
    object-position: top;
    border: 1px solid #eee;" />
                                                </div>
                                           
                                            <div  style="padding: 20px 0px">
                                              

                                                    <h4 ><b><?=$views[$name]?></b></h4>
                                                    <p id="st"><?=$views[$lav]?></p>
                                                    <p id="st"><i class="fa fa-envelope"></i> <?=$views['email']?></p>
                                                    <p id="st"><i class="fa fa-phone"></i> <?=$views['tel']?></p>
                                                   <a href="<?=\yii\helpers\Url::to(['/site/viewcen?id='.$views->id])?>" class="btn-style pull-left"><?=$hol?></a><br>

                                               

                                            </div>
                                      


                            <?php }?>
                        </div>
                 
            </div>

            <div class="col-md-12 portfolio clean col-sm-12 col-xs-12 col" id="myDIV1" style="display: none">
                <p id="st" style="text-align: justify"><?=$view[$about]?></p>
            </div>


        </div>

    </div>
</section>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction1() {
        var x = document.getElementById("myDIV1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction2() {
        var x = document.getElementById("myDIV2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction3() {
        var x = document.getElementById("myDIV3");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction4() {
        var x = document.getElementById("myDIV4");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction5() {
        var x = document.getElementById("myDIV5");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction6() {
        var x = document.getElementById("myDIV6");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<!-- porftolio-area end -->

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
