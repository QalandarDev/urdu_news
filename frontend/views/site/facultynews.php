<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.06.2019
 * @var $home string
 * @var $this \yii\web\View
 * @var $hodim \backend\models\Hodim[]
 */

use backend\models\Lavozimlar;

$this->registerAssetBundle(yii\web\JqueryAsset::className(), \yii\web\View::POS_HEAD);
$titlelang = Yii::t('app', 'Centres and departments');
$phone = Yii::t('app', 'Phone:');
$email = Yii::t('app', 'Email:');
$titlenews = Yii::t('app', 'News');
$titleevents = Yii::t('app', 'Faculty council');
$aboutall = Yii::t('app', 'About');
$aboutall1 = Yii::t('app', 'Staff');
$ilmiys = Yii::t('app', 'Normative legal act');

$aloqas = Yii::t('app', 'Relations');
$grants = Yii::t('app', 'Grants');
$hol = Yii::t('app', 'Autobiography');
$titlepage = Yii::t('app', 'Urgench State University');
$this->title = $titlepage;
$mytext=  Yii::t('app', 'Faculties');
$this->params['breadcrumbs'][] = ['label' => $mytext, 'url' => ['/site/faculty']];

$this->params['breadcrumbs'][] = ['label' => $model[$name], 'template' => "<li><b>{link}</b></li>\n"];
?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="page-header"><h2 class="h1-text"><?= $model[$name] ?></h2></div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <a class="btn btn-primary" style="padding: 8px"
           href="<?= \yii\helpers\Url::to(['/site/facultyview?id=' . $_GET['id']]) ?>"><?= $aboutall1 ?></a>
        <a class="btn btn-primary" style="padding: 8px"
           href="<?= \yii\helpers\Url::to(['/site/facultyabout?id=' . $_GET['id']]) ?>"><?= $aboutall ?></a>
        <a class="btn btn-primary" style="padding: 8px"
           href="<?= \yii\helpers\Url::to(['/site/facultynews?id=' . $_GET['id']]) ?>"><?= $titlenews ?></a>
        <a class="btn btn-primary" style="padding: 8px"
           href="<?= \yii\helpers\Url::to(['/site/facultydoc?id=' . $_GET['id']]) ?>"><?= $ilmiys ?></a>

    </div>
</div>
<div class="row grid">
    <div class="col-md-12 portfolio website col-sm-12 col-xs-12 col">

        <div class="row" style="margin-top: 5%">
            <?php foreach ($news as $item) { ?>
                <div class="col-md-12"
                     style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px">
                    <div class="blog-wrap" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="blog-img" style="margin-top: 10px">
                                    <img src="<?= $item->img ?>" style="height: 210px;" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-8" style="margin-top: -15px">
                                <div class="blog-content">
                                    <p><a id="h"
                                          href="<?= \yii\helpers\Url::to(['/site/view?id=' . $item->id]) ?>"><?= mb_substr($item[$newtitle], 0, 68) ?>
                                            ...</a></p>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a id="st" href="#"><i class="fa fa-user"></i> Admin</a></li>
                                            <li><a href="#" id="st"><i
                                                            class="fa fa-calendar"></i><?= $item['date'] ?> </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <p id="st"><?= mb_substr($item[$newtext], 0, 150) ?>...</p>
                                    <a href="<?= \yii\helpers\Url::to(['/site/view?id=' . $item->id]) ?>"
                                       class="btn-style pull-right">Read More</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</section>


<!-- porftolio-area end -->

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
