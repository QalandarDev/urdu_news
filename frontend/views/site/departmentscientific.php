<script> (function () {
        var st = document.createElement('script');
        st.type = 'text/javascript';
        st.async = true;
        st.src = 'https://www.researchgate.net/javascript/plugin/plugin-api-min.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(st, s);
    })(); </script>

<?php
/* @var $this \yii\web\View */

/* @var $home string */

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use backend\models\Search;

$this->registerAssetBundle(yii\web\JqueryAsset::className(), \yii\web\View::POS_HEAD);
$titlelang = Yii::t('app','Centres and departments');
$phone = Yii::t('app','Phone:');
$email = Yii::t('app','Email:');
$titlenews = Yii::t('app','News');
$titleevents = Yii::t('app','Events');
$aboutall = Yii::t('app','About Us');
$aboutall1 = Yii::t('app','Staff');
$ilmiys = Yii::t('app','Scientific work');
$aloqas = Yii::t('app','Relations');
$grants = Yii::t('app','Grants');
$hol = Yii::t('app','Details');
$more = Yii::t('app', 'Read more');
$savol = Yii::t('app','Control question');
$dastur = Yii::t('app','Scientific program');
$titlepage = Yii::t('app','Urgench State University');
$mytext = Yii::t('app',"Departments") ;

$this->title = $titlepage . "-" . $mytext;
$this->params['breadcrumbs'][] = ['label' => $mytext, 'url' => ['/site/department']];
$this->params['breadcrumbs'][] = ['label' => $model[$name], 'template' => "<li><b>{link}</b></li>\n"];
?>

<div class="porftolio-area">
        <div class="row">
            <div class="col-xs-12">
                <div class="portfolio-menu">
                    <a class="btn btn-primary"
                       href="<?= Url::to(['/site/departmentview?id=' . $_GET['id']]) ?>"><?= $aboutall ?></a>
                    <a class="btn btn-primary"
                       href="<?= Url::to(['/site/departmentviewemployee?id=' . $_GET['id']]) ?>"><?= $aboutall1 ?></a>
                    <a class="btn btn-primary"
                       href="<?= Url::to(['/site/departmentnews?id=' . $_GET['id']]) ?>"><?= $titlenews ?></a>
                    <a class="btn btn-primary"
                       href="<?= Url::to(['/site/departmentscientific?id=' . $_GET['id']]) ?>"><?= $ilmiys ?></a>
                </div>
                <div  class="tab-pane">
                    <?php if (isset($_GET["id"]) and $_GET["id"] == 37 or $_GET["id"] == 36 or $_GET["id"] == 77) { ?>
                        <div class="rg-plugin" data-stats="true" data-faces="true" data-publications="true" data-height="600"
                             data-width="100%" data-theme="light" data-type="department"
                             data-installationId="5dbd82e4a5a2e2a0047cee88"/>
                    <?php } ?>
                    <p style="text-align: justify"><?= $view[$ilmiy] ?></p>

                </div>



                <!--button style="padding: 8px" onclick="myFunction1()" class="active"
					data-filter=".clean1"><?= $aboutall ?></button-->
                <!--button style="padding: 8px" onclick="myFunction()"
					data-filter=".clean"><?= $aboutall1 ?></button-->
                <!--button style="padding: 8px" onclick="myFunction2()"
					data-filter=".website"><?= $titlenews ?></button-->
                <!--button style="padding: 8px" onclick="myFunction3()"
					data-filter=".responsiv"><?= $titleevents ?></button-->
                <!--button style="padding: 8px" onclick="myFunction4()"
					data-filter=".minimal"><?= $ilmiys ?></button-->
                <!--button style="padding: 8px" onclick="myFunction5()"
					data-filter=".aloqa"><?= $aloqas ?></button-->
                <!--button style="padding: 8px" onclick="myFunction6()"
					data-filter=".grant"><?= $grants ?></button-->
                <!--button style="padding: 8px" onclick="myFunction7()"
					data-filter=".savol"><?= $savol ?></button-->
                <!--button style="padding: 8px" onclick="myFunction8()"
					data-filter=".dastur"><?= $dastur ?></button-->
            </div>
        </div>
    </div>


<div class="col-md-12 portfolio  responsiv col-sm-12 col-xs-12 col" style="display: none" id="myDIV3">
    <div class="row">
        <?php foreach ($events as $item) { ?>
            <div class="col-md-12"
                 style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px">
                <div class="blog-wrap" style="margin-top: 10px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-img" style="margin-top: 10px">
                                <img src="<?=$home?><?php
                                if (!empty($item->img)) {
                                    echo "/images/" . $item->img;
                                }else{
                                    echo "/img/urdu_log.png";
                                }
                                ?>" style="height: 210px;"
                                     alt=<?= mb_substr($item[$eventtitle], 0, 68) ?>/>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top: -15px">
                            <div class="blog-content">
                                <p><a id="h" href="blog.html"><?= mb_substr($item[$eventtitle], 0, 68) ?>...</a></p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a id="st" href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li><a href="#" id="st"><i class="fa fa-calendar"></i><?= $item['date'] ?>
                                            </a></li>
                                        <li><a href="#" id="st"><i class="fa fa-clock-o"></i><?= $item['time'] ?>
                                            </a></li>
                                        <li><a href="#" id="st"><i class="fa fa-eye"></i> <?= $item['count'] ?> </a>
                                        </li>
                                    </ul>
                                </div>
                                <p id="st"><?= mb_substr($item[$eventtext], 0, 150) ?>...</p>
                                <p><a href="#" id="st"><i class="fa fa-map-marker"></i> <?= $item[$loc] ?> </a></p>
                                <a href="<?= Url::to(['/site/views?id=' . $item->id]) ?>"
                                   class="btn-style pull-right">Read More</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="col-md-12 portfolio minimal col-sm-12 col-xs-12 col" style="display: none" id="myDIV4">
    <?php if (isset($_GET["id"]) and $_GET["id"] == 37 or $_GET["id"] == 36) { ?>
        <div class="rg-plugin" data-stats="true" data-faces="true" data-publications="true" data-height="600"
             data-width="100%" data-theme="light" data-type="department"
             data-installationId="5dbd82e4a5a2e2a0047cee88"/>
    <?php } ?>
    <p id="st" style="text-align: justify"><?= $view[$ilmiy] ?></p>
</div>
<div class="col-md-12 portfolio aloqa col-sm-12 col-xs-12 col" style="display: none" id="myDIV5">
    <p id="st" style="text-align: justify"><?= $view[$aloqa] ?></p>
</div>
<div class="col-md-12 portfolio grant col-sm-12 col-xs-12 col" style="display: none" id="myDIV6">
    <p id="st" style="text-align: justify"><?= $view[$grant] ?></p>
</div>
<div class="col-md-12 portfolio savol col-sm-12 col-xs-12 col" style="display: none" id="myDIV7">
    <p id="st" style="text-align: justify"><?= $view['savol'] ?></p>
</div>
<div class="col-md-12 portfolio dastur col-sm-12 col-xs-12 col" style="display: none" id="myDIV8">
    <p id="st" style="text-align: justify"><?= $view['dastur'] ?></p>
</div>
</div>



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
