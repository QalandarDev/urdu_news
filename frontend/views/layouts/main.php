<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;

$this->registerMetaTag([
    'name' => 'article:author',
    'content' => 'QalandarDev'
]);
$this->registerMetaTag([
    'name' => 'twitter:title',
    'content' => $this->title
]);
$this->registerMetaTag([
    'name' => 'og:title',
    'content' => $this->title
]);
$this->registerMetaTag([
    'name' => 'telegram:channel',
    'content' => '@QalandarDev'
]);
$this->registerMetaTag([
    'name' => 'og:channel',
    'content' => '@QalandarDev'
]);
$this->registerMetaTag([
    'name' => 'viewport',
    'content' => 'width=device-width, initial-scale=1.0'
]);
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= $this->title ?></title>
    <?php
    $this->head();

    ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="full-width-header header-style2">
    <!--Header Start-->
    <?php include 'header.php'; ?>
    <!--Header End-->
</div>
<div class="wrap">

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

