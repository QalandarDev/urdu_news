<?php

namespace common\helpers;


use Yii;
use yii\bootstrap5\Html;

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

    public static function readMore(): string
    {
        $items = [
            Yii::t('news', 'Read more'),
            Yii::t('news', 'Continue reading'),
            Yii::t('news', 'Read the full article'),
            Yii::t('news', 'Read the full news'),
            Yii::t('news', 'Click to read'),
            Yii::t('news', 'Click to read more'),
            Yii::t('news', 'Click to continue reading'),
            Yii::t('news', 'Click to more'),
        ];
        return $items[array_rand($items)];
    }
}