<?php
/* @var $this \yii\web\View */

/* @var $home string */

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use backend\models\Search;

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
    <div class="container">
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

                <div class="row">
                    <?php foreach ($hodimlar as $views) { ?>
                        <div class="col-xs-12" style="padding:20px 0px">
                            <div style="float:left">
                                <img src="<?= $home ?>/hodimlar/<?= $views['img'] ?>"
                                     alt="<?= $titlepage ?>"
                                     style="height: 200px;
														width: 200px;
														object-fit: cover;
														margin-right: 50px;
														object-position: top;
														border:1px solid #eee;"
                                />
                            </div>
                            <div style="padding:20px 0px">
                                <h4><b><?= $views[$name] ?></b></h4>
                                <?php
                                $searchform = new Search();
                                $lavozim = $searchform->mylavozim();
                                ?>
                                <p id="st"><?= $lavozim[$views['lav_id']] ?></p>
                                <p id="st"><i class="fa fa-envelope"></i> <?= $views['email'] ?></p>
                                <p id="st"><i class="fa fa-phone"></i> <?= $views['tel'] ?></p>
                                <!--p id="st"><i class="fa fa-wpforms"></i> <?= $views[$ilm] ?></p>
											<p id="st"><i class="fa fa-twitch"></i> <?= $views[$ilm1] ?></p-->
                                <a href="<?= Url::to(['/site/viewdep?id=' . $views->id]) ?>"
                                   class=""><?= $hol ?></a><br-->
                            </div>
                        </div>
                    <?php } ?>
                </div>


            </div>
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
                                <a href="<?= \yii\helpers\Url::to(['/site/views?id=' . $item->id]) ?>"
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

