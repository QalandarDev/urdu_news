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
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="full-width-header header-style2">
    <!--Header Start-->
    <?php include 'header.php'; ?>
    <!--Header End-->
</div>
<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <?php
        try {
            echo \yii\bootstrap4\Breadcrumbs::widget(
                [
                    'homeLink' => ['label' => Yii::t('app', 'Home'), 'url' => Yii::$app->homeUrl],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
            );
        } catch (Throwable $e) {
            echo $e->getMessage();
        } ?>
    </div>
    <!-- Content Start -->
    <?= $content ?>
    <!-- Content End -->
</div>
<!-- Footer Start -->
<?= $this->render('_footer') ?>
<!-- Footer End -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

