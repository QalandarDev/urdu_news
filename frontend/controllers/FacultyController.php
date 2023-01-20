<?php

namespace frontend\controllers;

use common\helpers\Pagination;
use frontend\models\Employee;
use frontend\models\Faculty;
use frontend\models\FacultyPage;
use frontend\models\News;

class FacultyController extends \yii\web\Controller
{

    /**
     * @sitemap priority=0.88 changefreq=hourly
     */
    public function actionIndex(): string
    {
        $faculties = Faculty::find()->all();
        return $this->render('index', [
            'faculties' => $faculties,
        ]);
    }

    /**
     * @sitemap priority=0.87 changefreq=hourly route=['/faculty/view','id'=>$model->id]  model=backend\models\faculty condition=['cate'=>1]
     */
    public function actionView($id): string
    {
        $faculty = @Faculty::findOne(['id' => $id]);
        $teams = Employee::findByCategory($faculty->id);
        return $this->render('view', [
            'faculty' => $faculty,
            'teams' => $teams
        ]);
    }


    public function actionEmployee(int $id, int $employee): string
    {
        $team = Employee::findOne(['id' => $employee]);
        $faculty = Faculty::findOne(['id' => $id]);
        return $this->render('employee', [
            'team' => $team,
            'faculty' => $faculty,
        ]);
    }

    /**
     * @sitemap priority=0.86 changefreq=hourly route=['/faculty/about','id'=>$model->id]  model=backend\models\faculty condition=['cate'=>1]
     */
    public function actionAbout($id): string
    {
        $faculty = Faculty::findOne(['id' => $id]);
        $about = FacultyPage::findOne(['user_id' => $id])->about;
        return $this->render('about', [
            'about' => $about,
            'faculty' => $faculty,
        ]);
    }

    /**
     * @sitemap priority=0.85 changefreq=hourly route=['/faculty/news','id'=>$model->id]  model=backend\models\faculty condition=['cate'=>1]
     */
    public function actionNews($id): string
    {
        $faculty = Faculty::findOne(['id' => $id]);
        $news = News::findByUser($id);
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $news->count(),
        ]);
        $news = $news->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('news', [
            'faculty' => $faculty,
            'model' => $news,
            'pagination' => $pagination,
        ]);
    }

    final public function actionCommunication(int $id): string
    {
        $faculty = Faculty::findOne(['id' => $id]);
        $communication = FacultyPage::findOne(['user_id' => $id])->communication;
        return $this->render('communication',
            [
                'communication' => $communication,
                'faculty' => $faculty,
            ]);
    }

    final public function actionScientific(int $id): string
    {
        $faculty = Faculty::findOne(['id' => $id]);
        $scientific = FacultyPage::findOne(['user_id' => $id])->scientific;
        return $this->render('scientific',
            [
                'scientific' => $scientific,
                'faculty' => $faculty,
            ]);
    }

    final public function actionGrants(int $id): string
    {
        $faculty = Faculty::findOne(['id' => $id]);
        $grants = FacultyPage::findOne(['user_id' => $id])->grants;
        return $this->render('grants',
            [
                'grants' => $grants,
                'faculty' => $faculty,
            ]);
    }
}