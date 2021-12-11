<?php


namespace frontend\controllers;


use yii\web\Controller;

class CimpaController extends Controller
{
    public $layout = 'cimpa';
    public function actionHome()
    {
        return $this->render('home');
    }
}
