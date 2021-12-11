<?php


namespace frontend\controllers;


use yii\web\Controller;

class NewController extends Controller
{
    public $layout = 'main3';
    public function actionIndex()
    {
        return $this->render('index');
    }
}