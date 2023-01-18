<?php

namespace frontend\controllers;


use common\helpers\MenuHelpers;
use yii\web\Controller;

final class ApplicantController extends Controller
{
    public function actionBachelor(): string
    {
        return $this->render('bachelor', [
            'pages' => MenuHelpers::bachelor(),
        ]);
    }
}