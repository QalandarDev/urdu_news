<?php

use frontend\widgets\PageWidget;
use yii\web\View;

/**
 * @var $this View
 * @var $pages array
 * @var $title string
 */
$this->title = $title;

try {
    echo PageWidget::widget([
        'pages' => $pages,
        'title' => $this->title
    ]);
} catch (Throwable $e) {
    echo $e->getMessage();
}