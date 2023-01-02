<?php

namespace frontend\controllers;

use backend\models\Center;
use backend\models\CenterPage;
use backend\models\Hodim;
use backend\models\News;
use common\helpers\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class FacultyController extends \yii\web\Controller
{
    /**
     * @throws NotFoundHttpException
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        if ($action->id !== 'index') {
            $id = @\Yii::$app->request->get('id');
            $center = Center::findOne(['id' => $id]);
            if (!($center instanceof Center) || $center->cate !== 1) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
        return parent::beforeAction($action);
    }

    /**
     * @sitemap priority=0.88 changefreq=hourly
     */
    public function actionIndex(): string
    {
        $centers = Center::find()->andFilterWhere(['cate' => 1])->all();
        return $this->render('index', [
            'centers' => $centers,
        ]);
    }

    /**
     * @sitemap priority=0.87 changefreq=hourly route=['/faculty/view','id'=>$model->id]  model=backend\models\Center condition='id'<>0
     */
    public function actionView($id): string
    {
        $center = @Center::findOne(['id' => $id]);
        $teams = Hodim::find()->andFilterWhere(['cate' => $center->id])->orderBy(['lav_id' => SORT_ASC])->all();
        return $this->render('view', [
            'center' => $center,
            'teams' => $teams,
        ]);
    }



    public function actionEmployee(int $id, int $employee): string
    {
        $team = Hodim::findOne(['id' => $employee]);
        $center = Center::findOne(['id' => $id]);
        return $this->render('employee', [
            'team' => $team,
            'center' => $center,
        ]);
    }

    public function actionAbout($id): string
    {
        $center = Center::findOne(['id' => $id]);
        $about = CenterPage::findOne(['user_id' => $id]);
        return $this->render('about', [
            'about' => $about,
            'center' => $center,
        ]);
    }

    public function actionNews($id): string
    {
        $center = Center::findOne(['id' => $id]);
        $news = News::find()->andFilterWhere(['user_id' => $id])
            ->orderBy(['id' => SORT_DESC]);
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $news->count(),
        ]);
        $news = $news->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('news', [
            'center' => $center,
            'model' => $news,
            'pagination' => $pagination,
        ]);
    }
}