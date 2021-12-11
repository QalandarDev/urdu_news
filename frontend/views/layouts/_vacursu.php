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
        <meta http-equiv="Urganch davlat universiteti"
              content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
        <meta name="Urganch davlat universiteti"
              content="Urganch davlat universiteti,Urgench state university,Ургенчский Государственный Университет,Urganch,Xiva,Khiva,Xorazim,Kharezm,urdu,ursu">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
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
        <?= $this->render("_menu") ?>
        <!-- heared area end -->
        <!-- heared area end -->
        <div class="single-service-area ptb-100" style="margin-top: -100px">
            <hr style=" border-top: 1px solid #296dc1;margin-top: 0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render("_footer") ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>