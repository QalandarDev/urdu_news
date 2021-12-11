<?php


namespace frontend\controllers;


use yii\helpers\Json;
use yii\httpclient\Client;
use yii\web\Controller;

class QabulController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionQabuldtm()
    {
        $client = new Client();
        $respose = $client->get("http://qabul.dtm.uz/data/day.json?v=20071014")->send();
        $data = $respose->getData();
        return Json::encode($data[341]);
    }
}
