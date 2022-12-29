<?php


namespace frontend\controllers;

use backend\models\Center;
use backend\models\CenterPage;
use backend\models\Hodim;
use backend\models\News;
use common\helpers\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DepartmentController extends Controller
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
            if (!($center instanceof Center) || $center->cate !== 2) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
        return parent::beforeAction($action);
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        $faculties = Center::find()->andFilterWhere(['cate' => 1])->all();
        $departments = Center::find()->andFilterWhere(['cate' => 2])->orderBy(['fak_id' => SORT_ASC])->all();
        return $this->render('index',
            [
                'faculties' => $faculties,
                'departments' => $departments,
            ]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionView(int $id): string
    {
        $department = @Center::findOne(['id' => $id]);
        $teams = Hodim::find()->andFilterWhere(['cate' => $department->id])
            ->orderBy(['lav_id' => SORT_ASC])
            ->all();
        return $this->render('view',
            [
                'department' => $department,
                'teams' => $teams,
            ]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionAbout(int $id): string
    {
        $department = @Center::findOne(['id' => $id]);
        $about = @CenterPage::find()
            ->andFilterWhere(['user_id' => $department->id])
            ->one();
        return $this->render('about', [
            'department' => $department,
            'about' => $about,
        ]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionNews(int $id): string
    {
        $department = Center::findOne(['id' => $id]);
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
            'department' => $department,
            'model' => $news,
            'pagination' => $pagination,
        ]);
    }

    /**
     * @param int $id
     * @param int $employee
     * @return string
     */
    public function actionEmployee(int $id, int $employee): string
    {
        $department = Center::findOne(['id' => $id]);
        $team = Hodim::findOne(['id' => $employee]);
        return $this->render('employee', [
            'team' => $team,
            'department' => $department
        ]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionScientific(int $id): string
    {
        $department = @Center::findOne(['id' => $id]);
        $scientific = CenterPage::findOne(['user_id' => $department->id]);
        return $this->render('scientific', [
            'department' => $department,
            'scientific' => $scientific
        ]);
    }
}