<?php

namespace frontend\widgets;


use yii\bootstrap5\Widget;

final class AboutWidget extends Widget
{
    public function run()
    {
        return $this->render('about');
    }
}