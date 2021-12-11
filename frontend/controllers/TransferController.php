<?php


namespace frontend\controllers;


use yii\web\Controller;

class TransferController extends Controller
{
    public $layout = 'faol';

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionXorijiy(): string
    {
        return $this->render('xorijiy');
    }

    public function actionTurdosh()
    {
        return $this->render('turdosh');
    }
}
