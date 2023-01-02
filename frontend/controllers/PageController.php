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
    /**
     * @sitemap priority=0.92 changefreq=hourly
     */
    public function actionHistory(): string
    {
        $model = About::findOne(['cate' => 1]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    /**
     * @sitemap priority=0.91 changefreq=hourly
     */
    public function actionRegulation(): string
    {
        $model = About::findOne(['cate' => 2]);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    /**
     * @sitemap priority=0.90 changefreq=hourly
     */
    public function actionAdministration()
    {
        $teams = Rectorate::find()->all();
        return $this->render('teams', [
            'teams' => $teams,
        ]);
    }

    /**
     * @sitemap priority=0.89 changefreq=hourly route=['/page/adminstration-team','id'=>$model->id]  model=backend\models\Rectorate condition='id'<>0
     */
    public function actionAdminstrationTeam($id)
    {
        $team = Rectorate::findOne(['id' => $id]);
        return $this->render('team', [
            'team' => $team,
        ]);
    }

    /**
     * @sitemap priority=0.88 changefreq=hourly route=['/page/view','id'=>$model->id]  model=backend\models\AllAction condition='id'<>0
     */
    public function actionView(int $id):string
    {
        $page=AllAction::findOne(['id'=>$id]);
        return $this->render('view',[
            'page'=>$page,
        ]);
    }
}