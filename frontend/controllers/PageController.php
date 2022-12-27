<?php

namespace frontend\controllers;

use backend\models\About;
use backend\models\Center;
use backend\models\Hodim;
use backend\models\Rectorate;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionHistory(): string
    {
        $model = About::findOne(['cate' => 1]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    public function actionRegulation(): string
    {
        $model = About::findOne(['cate' => 2]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    public function actionAdministration()
    {
        $teams = Rectorate::find()->all();
        return $this->render('teams', [
            'teams' => $teams,
        ]);
    }

    public function actionAdminstrationTeam($id)
    {
        $team = Rectorate::findOne(['id' => $id]);
        return $this->render('team', [
            'team' => $team,
        ]);
    }

    public function actionFaculties(): string
    {
        $centers = Center::find()->andFilterWhere(['cate' => 1])->all();
        return $this->render('centers', [
            'centers' => $centers,
        ]);
    }

    public function actionFaculty($id): string
    {
        $center = @Center::findOne(['id' => $id]);
        $teams = Hodim::find()->andFilterWhere(['cate' => $center->id])->orderBy(['lav_id' => SORT_ASC])->all();
        return $this->render('center', [
            'center' => $center,
            'teams' => $teams,
        ]);
    }

    public function actionFacultyEmployee(int $faculty, int $employee)
    {
        $team = Hodim::findOne(['id' => $employee]);
        return $this->render('employee', [
            'team' => $team,
        ]);
    }

}