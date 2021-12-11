</div>
<?php

/* @var $this yii\web\View */
/* @var $model \backend\models\Galery[] */
/* @var $student_life \backend\models\Galery[] */
/* @var $globalization \backend\models\Galery[] */
/* @var $pages \yii\data\Pagination */
/* @var $home string */


$this->title = Yii::t('app', 'Urgench State University');
?>
<hr style="margin-top: -90px">
<!-- porftolio-area start -->
<section class="porftolio-area" style="padding: 5px">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-10  col-xs-12">
                    <div class="section-title section-title2">
                        <h2 id="h"><?= Yii::t('app', 'Photo gallery') ?></>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">

                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="portfolio-wrap">
                        <div class="overlay">
                            <h3><?= Yii::t('app', 'Campus') ?></h3>
                            <a href="<?= \yii\helpers\Url::to(['news/gview', 'id' => $model->type]) ?>"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-img">
                            <img src="<?=$home?>/images/gallery/<?= $model->img ?>" alt="<?= $model->title ?>"
                                 style="height:400px" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="portfolio-wrap">
                        <div class="overlay">
                            <h3><?= Yii::t('app', 'Globalization') ?></h3>
                            <a href="<?= \yii\helpers\Url::to(['news/gview', 'id' => $globalization->type]) ?>"><i class="fa fa-link"></i></a>

                        </div>
                        <div class="portfolio-img">
                            <img src="<?=$home?>/images/gallery/<?= $globalization->img ?>" alt="<?= $globalization->title ?>"
                                 style="height:400px" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="portfolio-wrap">
                        <div class="overlay">
                            <h3><?= Yii::t('app', 'Student Life') ?></h3>
                            <a href="<?= \yii\helpers\Url::to(['news/gview', 'id' => $student_life->type]) ?>"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-img">
                            <img src="<?=$home?>/images/gallery/<?= $student_life->img ?>" alt="<?= $student_life->title ?>"
                                 style="height:400px" />
                        </div>
                    </div>
                </div>


        </div>

    </div>

</section>
<!-- porftolio-area end -->


<!-- video-area start -->
<section class="video-area  parallax black-opacity wow fadeInUp" style="height:300px" data-speed="5"
         data-bg-image="<? //= $home ?>/martxa/martxa/assets/images/slider/51F96233685BFC8B1301161433B62D80.jpg">
    <h2 class="hidden">Video area</h2>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="video-wrap text-center">
                            <a href="https://mover.uz/video/embed/uyVXF4Dm/" class="video-popup">
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
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->

<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/owl.carousel.min.js"></script>
<!-- counterup.main.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/counterup.main.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/isotope.pkgd.min.js"></script>
<!-- jquery.waypoints.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.waypoints.min.js"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.magnific-popup.min.js"></script>
<!-- jquery.slicknav.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/jquery.slicknav.min.js"></script>
<!-- snake.min.js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/snake.min.js"></script>
<!-- wow js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/plugins.js"></script>
<!-- main js -->
<script src="<?= Yii::$app->request->baseUrl ?>/martxa/martxa/assets/js/scripts.js"></script>

<style>
    #st {

        font-family: Arial;
        font-size: 13px;
    }

    #h {

        font-family: Georgia;
        font-size: 20px;

    }

</style>
