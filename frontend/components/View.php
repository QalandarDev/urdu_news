<?php


namespace frontend\components;

class View extends \yii\web\View
{

    public function getMenuList(): array
    {
        $data = [];
        $data[] = ['label' => 'Home', 'url' => ['/new/index']];
        $data[] = ['label' => __('News'), 'items' => [
            ['label' => __('News'), 'url' => ['/news/index']],
            ['label' => __('Events'), 'url' => ['/news/events']],
            ['label' => __('Gallery'), 'url' => ['/news/events']],
            ['label' => __('Video lavhalar'), 'url' => ['/news/events']],
        ]];
        $data[] = ['label' => __('University'), 'items' => [
            ['label'=>__('History of university'),'url'=>['site/about']]
        ]];

        $data[]=['label'=>__('Applicants'),'items'=>[
            ['label'=>__('History of university'),'url'=>['site/about']]
        ]];
        $data[]=['label'=>__('Students'),'items'=>[
            ['label' => __('History of university'), 'url' => ['site/about']],
            ['label' => __('International students'), 'items' => [
                ['label' => __('History of university'), 'url' => ['site/about']]
            ]],
        ]];
        $data[]=['label'=>__('Documents'),'items'=>[
            ['label'=>__('History of university'),'url'=>['site/about']]
        ]];

        $data[]=['label'=>__('Interaktive service'),'items'=>[
            ['label'=>__('History of university'),'url'=>['site/about']]
        ]];

        $data[]=['label'=>__('Masofaviy talim'),'items'=>[
            ['label'=>__('History of university'),'url'=>['site/about']]
        ]];
        return $data;
    }
}