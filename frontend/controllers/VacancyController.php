<?php


namespace frontend\controllers;


use Page;
use yii\web\Controller;

class VacancyController extends Controller
{
    public function actionIndex()
    {
        $model = Page::find()->where(['cate' => 11])->one();
        return $this->render('index',[
            'model' => $model,
        ]);
    }
}
