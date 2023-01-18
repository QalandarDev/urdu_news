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
    public function actionSecond(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::second(),
            'title' => Yii::t('news', 'Second')
        ]);
    }
    public function actionFive(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::five(),
            'title' => Yii::t('news', 'Five Years ')
        ]);
    }
    public function actionJoint(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::joint(),
            'title' => Yii::t('news', 'Joint')
        ]);
    }
    public function actionInternationalStudent(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::internationalStudent(),
            'title' => Yii::t('news', "International Student")
        ]);
    }
}