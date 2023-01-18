<?php

namespace frontend\controllers;


use common\helpers\MenuHelpers;
use Yii;
use yii\web\Controller;

final class ApplicantController extends Controller
{
    public function actionBachelor(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::bachelor(),
            'title' => Yii::t('news', 'Bachelor')
        ]);
    }

    public function actionMaster(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::master(),
            'title' => Yii::t('news', 'Master')
        ]);
    }
    public function actionTransfer(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::transfer(),
            'title' => Yii::t('news', 'Transfer')
        ]);
    }
}