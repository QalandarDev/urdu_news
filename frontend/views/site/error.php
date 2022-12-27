<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $message;
?>
<div id="rs-page-error" class="rs-page-error">
    <div class="error-text">
        <h1 class="error-code"><?= Yii::$app->response->statusCode?></h1>
        <h3 class="error-message"><?= $message?></h3>
        <a class="readon btn" href="<?=\yii\helpers\Url::to(['/'])?>"><?=Yii::t('news',"Back to Homepage")?></a>
    </div>
</div>
