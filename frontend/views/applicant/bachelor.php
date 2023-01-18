<?php

use frontend\widgets\PageWidget;
use yii\web\View;


/**
 * @var $this View
 * @var $pages array
 */
$this->title = Yii::t('news', 'Bachelor');
try {
    echo PageWidget::widget([
        'pages' => $pages,
        'title' => $this->title
    ]);
} catch (Throwable $e) {
    echo $e->getMessage();
}