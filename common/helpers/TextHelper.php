<?php

namespace common\helpers;


use lajax\translatemanager\helpers\Language;
use Yii;
use yii\bootstrap4\Html;

class TextHelper
{
    public static function email(string $email): string
    {
        return
            Html::tag(name: 'span', content: Html::tag(name: 'i', options: ['class' => 'fa fa-envelope']))
            . Html::a(text: $email, url: 'mailto:' . $email);
    }

    public static function phone(string $phone): string
    {
        return
            Html::tag(name: 'span', content: Html::tag(name: 'i', options: ['class' => 'fa fa-phone']))
            . Html::a(text: $phone, url: 'tel:' . $phone);
    }
}