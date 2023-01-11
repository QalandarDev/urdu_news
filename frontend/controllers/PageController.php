<?php

namespace frontend\controllers;

use frontend\models\About;
use frontend\models\Page;

class PageController extends \yii\web\Controller
{
    /**
     * @sitemap priority=0.92 changefreq=hourly
     */
    public function actionHistory(): string
    {
        $model = About::findOne(['cate' => 1]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    /**
     * @sitemap priority=0.91 changefreq=hourly
     */
    public function actionRegulation(): string
    {
        $model = About::findOne(['cate' => 2]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }
    /**
     * @sitemap priority=0.88 changefreq=hourly route=['/page/view','id'=>$model->id]  model=Page condition='id'<>0
     */
    public function actionView(int $id):string
    {
        $page=Page::findOne(['id'=>$id]);
        return $this->render('view',[
            'page'=>$page,
        ]);
    }
}