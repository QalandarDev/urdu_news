<?php

/**
 * @var $this View
 * @var $content string
 */

use frontend\assets\AppAsset;
use yii\web\View;

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

