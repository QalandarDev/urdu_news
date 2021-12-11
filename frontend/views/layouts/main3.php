<?php
/* @var $this \frontend\components\View*/
/* @var $content string */
use yii\bootstrap\Nav;
use frontend\assets\NewAssets;

NewAssets::register($this);
$this->beginPage();
?>
<!doctype html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urdu uz</title>
    <?php $this->head();?>
</head>
<body>
<?php $this->beginBody();?>
    <div class="wrap">
        <?=Nav::widget([
            'items'=>$this->getMenuList(),
        ])?>
    </div>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
