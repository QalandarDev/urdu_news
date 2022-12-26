<?php

namespace common\helpers;


use lajax\translatemanager\helpers\Language;
use Yii;

class TextHelper
{
    public array $news;


    public static function News(): string
    {
        $news = [
            'uz' => "So'nggi yangiliklar",
            'ru' => "Последние новости",
            'en' => "Latest news"
        ];
        return $news[Yii::$app->language];
    }

    public static function ReadMore(): string
    {
        $more = [
            'uz' => "Batafsil",
            'ru' => "Подробно",
            'en' => "Read more"
        ];
        return $more[Yii::$app->language];
    }

    public static function Category(): string
    {
        $cat = [
            'uz' => "Kategoriyalar",
            'ru' => "Категории",
            'en' => "Categories"
        ];
        return $cat[Yii::$app->language];
    }

    public static function t(string $text):string
    {
        return Language::t('news', $text);
    }


}