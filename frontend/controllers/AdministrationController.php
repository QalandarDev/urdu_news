<?php

namespace frontend\controllers;


use frontend\models\Administration;
use yii\web\Controller;

class AdministrationController extends Controller
{
    final public function actionIndex(): string
    {
        $teams = Administration::find()->all();
        return $this->render('index', [
            'teams' => $teams,
        ]);
    }
    final public function actionEmployee(int $id):string
    {
        $team = Administration::findOne(['id' => $id]);
        return $this->render('team', [
            'team' => $team,
        ]);
    }
}
