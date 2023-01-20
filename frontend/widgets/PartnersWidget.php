<?php

namespace frontend\widgets;


use yii\bootstrap5\Widget;

final class PartnersWidget extends Widget
{
    public function run()
    {
        return $this->render('partners');
    }
}