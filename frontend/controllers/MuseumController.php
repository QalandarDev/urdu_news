<?php


namespace frontend\controllers;


use yii\web\Controller;

class MuseumController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
   }
}
