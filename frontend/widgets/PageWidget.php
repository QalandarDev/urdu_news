<?php

namespace frontend\widgets;

use frontend\models\Page;
use yii\base\Widget;

class PageWidget extends Widget
{
    public array $pages = [];
    public string $title = '';

    public function run()
    {
        $pages = Page::find()
            ->andFilterWhere(['id' => $this->pages])
            ->orderBy(['date' => SORT_DESC])
            ->all();
        return $this->render('page', [
            'pages' => $pages,
            'title' => $this->title
        ]);
    }
}