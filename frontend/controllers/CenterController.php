<?php

namespace frontend\controllers;


use frontend\models\Center;
use frontend\models\CenterPage;
use frontend\models\Employee;
use frontend\models\News;
use common\helpers\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class CenterController extends \yii\web\Controller
{

    /**
     * @sitemap priority=0.79 changefreq=hourly
     */
    public function actionIndex(): string
    {
        $centers = Center::findAll(['cate' => 3]);
        return $this->render('index', [
            'centers' => $centers
        ]);
    }

    /**
     * @sitemap priority=0.78 changefreq=hourly route=['/center/view','id'=>$model->id]  model=backend\models\Center condition=['cate'=>3]
     */
    public function actionView($id): string
    {
        $center = Center::findOne(['id' => $id]);
        $teams = Employee::find()->andFilterWhere(['cate' => $id])
            ->orderBy(['lav_id' => SORT_ASC])
            ->all();
        return $this->render('view', [
            'center' => $center,
            'teams' => $teams
        ]);
    }

    /**
     * @sitemap priority=0.77 changefreq=hourly route=['/center/about','id'=>$model->id]  model=backend\models\Center condition=['cate'=>3]
     */
    public function actionAbout($id): string
    {
        $center = Center::findOne(['id' => $id]);
        $about = CenterPage::findOne(['user_id' => $id]);
        return $this->render('about', [
            'center' => $center,
            'about' => $about
        ]);
    }

    /**
     * @throws NotFoundHttpException
     * @sitemap priority=0.76 changefreq=hourly route=['/center/news','id'=>$model->id]  model=backend\models\Center condition=['cate'=>3]
     */
    public function actionNews(int $id): string
    {
        $center = Center::findOne(['id' => $id]);
        $news = News::find()->andFilterWhere(['user_id' => $id])
            ->orderBy(['id' => SORT_DESC]);
        if ($news->count() === 0) {
            throw new NotFoundHttpException(\Yii::t('news', 'News not found in this center'));
        }
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $news->count(),
        ]);
        $news = $news->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('news', [
            'model' => $news,
            'pagination' => $pagination,
            'center' => $center,
        ]);
    }

    public function actionEmployee(int $id, int $employee): string
    {
        $center = Center::findOne(['id' => $id]);
        $team = Employee::findOne(['id' => $employee]);
        return $this->render('employee', [
            'team' => $team,
            'center' => $center,
        ]);
    }
}