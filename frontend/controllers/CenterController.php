<?php

namespace frontend\controllers;


use backend\models\Center;
use backend\models\CenterPage;
use backend\models\Hodim;
use backend\models\News;
use common\helpers\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class CenterController extends \yii\web\Controller
{

    /**
     * @throws NotFoundHttpException
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        if ($action->id !== 'index') {
            $id = @\Yii::$app->request->get('id');
            $center = @Center::findOne(['id' => $id]);
            if (!($center instanceof Center) || $center->cate !== 3) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(): string
    {
        $centers = Center::findAll(['cate' => 3]);
        return $this->render('index', [
            'centers' => $centers
        ]);
    }

    public function actionView($id): string
    {
        $center = Center::findOne(['id' => $id]);
        $teams = Hodim::findAll(['cate' => $id]);
        return $this->render('view', [
            'center' => $center,
            'teams' => $teams
        ]);
    }

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
     */
    public function actionNews(int $id): string
    {
        $center = Center::findOne(['id' => $id]);
        $news = News::find()->andFilterWhere(['user_id' => $id])
            ->orderBy(['id' => SORT_DESC]);
        if($news->count()===0){
            throw new NotFoundHttpException(\Yii::t('news','News not found in this center'));
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
        $team = Hodim::findOne(['id' => $employee]);
        return $this->render('employee', [
            'team' => $team,
            'center' => $center,
        ]);
    }
}