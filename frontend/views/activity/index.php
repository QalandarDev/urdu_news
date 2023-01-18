<?php

use frontend\models\Page;
use frontend\widgets\PageWidget;
use yii\db\ActiveRecord;
use yii\web\View;


/**
 * @var $this View
 * @var $pages array|Page[]|ActiveRecord[]
 * @var $page Page
 * @var $title string
 */


try {
    echo PageWidget::widget(
        [
            'pages' => $pages,
            'title' => $title
        ]
    );
} catch (Throwable $e) {
    echo $e->getMessage();
}
