<?php


/* @var $this \yii\web\View */

/* @var $home string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use backend\models\Search;

$avtoreferat = Yii::t('app', 'Abstract');
$title = "title_" . Yii::$app->language;
$autor = "autor_" . Yii::$app->language;
$avto = \backend\models\Avtoreferat::find()->where(['status' => 1])->all();
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avtoreferat'), 'url' => ['index']];

?>


<div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="breadcrumb">
                <li><a href="/">Asosiy</a></li>
                <li class="active">Avtoreferat</li>
            </ul>
            <div class="col-md-12">
                <div class="row">
                    <div class="page-header"><h2 class="h1-text" style="color:#0000CD; font-size:2rem; font-weight: bold">Avtoreferat</h2></div>
                </div>
                <?php foreach ($avto as $item) { ?>
                    <p id="st" style="text-align: justify;"></p>
                    <p style="text-align:justify"><span style="font-size:14px"></span></p>
<!--                        --><?//= Html::a($item[$title],['@public'.'/uploads/avtoreferat/'.$item->file],['target'=>'_blank'])?>
                    <a href="/uploads/avtoreferat/<?= $item->file?>" style="color:#0000CD; font-size:2rem; font-weight: bold"><?=$item[$title]?></a><br>
                    <a href="/uploads/avtoreferat/<?= $item->file?>" style="color:#0000CD; font-size:1.5rem"><?=$item[$autor]?></a>
                    <br>
                    <br>
                <?php } ?>
                <hr>

            </div>

        </div>
        <div class="col-md-3" id="mobile">
            <aside class="service-sidebar">
                <div class="sidebar-menu">
                    <ul>
                        <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05);"><b>Ilmiy Kengash</b></a></li>

                        <li><a href="/site/active?id=1">Ilmiy kengash</a></li>


                        <li><a href="/site/active?id=2">Ixtisoslashtirilgan kengash</a></li>


                        <li><a href="/site/active?id=25">Ilmiy jurnallar</a></li>


                        <li><a href="/site/active?id=26">Ustoz-shogird maktabi</a></li>


                        <li><a href="/site/active?id=52">Bitiruvchilar clubi</a></li>


                        <li><a href="/site/active?id=53">Yosh olimlar maktabi</a></li>


                        <li><a href="/site/active?id=66">Istiqboldagi rejalar</a></li>


                        <li><a href="/site/active?id=67">Ilmiy tadqiqot faoliyati</a></li>


                        <li><a href="/site/active?id=68">Avtoreferat</a></li>


                        <li><a href="/site/active?id=69">Ilmiy tadqiqot yo'nalishlari</a></li>


                        <li><a href="/site/active?id=70">Nomzodlik imtihonlari</a></li>


                        <li><a href="/site/active?id=71">Nashr ishlari</a></li>

                    </ul>
                </div>

            </aside>
            <aside class="service-sidebar">
                <div class="sidebar-menu">
                    <ul>
                        <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05);"><b>STRUCTURE</b></a></li>
                        <li><a href="/site/about">Universitet tarixi</a></li>
                        <li><a href="/site/nizom">Universitet nizomi</a></li>
                        <li><a href="/site/rektorat">Rektorat</a></li>
                        <li><a href="/site/faculty">Fakultetlar</a></li>
                        <li><a href="/site/department">Kafedralar</a></li>
                        <li><a href="/site/center">Markaz va bo'limlar</a></li>

                    </ul>
                </div>

            </aside>
            <aside class="service-sidebar">
                <div class="sidebar-menu">
                    <ul>
                        <li style=" border-top: 1px solid #296dc1"><a style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b>Yangiliklar</b></a></li>
                        <li><a href="/site/news">Yangiliklar</a></li>
                        <li><a href="/site/events">E'lonlar</a></li>
                    </ul>
                </div>

            </aside>
        </div>

    </div>
</div>


<!--<div>-->
<?php //foreach ($avto as $item) { ?>
<!--    <li><a href="--><? //= Url::to(['/site/active?id=' . $item->id]) ?><!--">-->
<!--            <i class="fa fa-caret-right"></i> --><? //= $item[$title] ?><!--</a>-->
<!--    </li>-->
<!--    <li><a href="--><? //= Url::to(['/site/active?id=' . $item->id]) ?><!--">-->
<!--            <i class="fa fa-caret-right"></i> --><? //= $item[$autor] ?><!--</a>-->
<!--    </li>-->
<!---->
<?php //} ?>
<!--</div>-->
