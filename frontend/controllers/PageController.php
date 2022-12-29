<?php

namespace frontend\controllers;

use backend\models\About;
use backend\models\AllAction;
use backend\models\Center;
use backend\models\CenterPage;
use backend\models\Hodim;
use backend\models\News;
use backend\models\Rectorate;
use common\helpers\Pagination;

class PageController extends \yii\web\Controller
{
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

    public function actionView(int $id):string
    {
        $page=AllAction::findOne(['id'=>$id]);
        return $this->render('view',[
            'page'=>$page,
        ]);
    }
}