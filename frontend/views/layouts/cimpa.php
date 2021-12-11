<?php
/**
 * @var $this \yii\web\View
 * @var $content string
 */
use frontend\assets\CimpaAsset;

CimpaAsset::register($this);
$this->beginPage();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cimpa</title>
    <?php $this->head();?>
</head>
<body>
<?php $this->beginPage();?>
    <?=$content?>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
