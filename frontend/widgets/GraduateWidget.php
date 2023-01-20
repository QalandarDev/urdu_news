<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

final class GraduateWidget extends Widget
{
    public function run()
    {
        return $this->render('graduate');
    }
}