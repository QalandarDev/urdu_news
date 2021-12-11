<?php


namespace frontend\controllers;


use Yii;
use yii\filters\ContentNegotiator;
use yii\web\Controller;
use yii\web\Response;

class SitemapController extends Controller
{
    public $layout = false;

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->response->format = Response::FORMAT_RAW;
        $this->response->headers->add('Content-Type', 'application/xml');
    }


    public function actionIndex(): string
    {

        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
