<?php


namespace frontend\controllers;

use common\helpers\Pagination;
use frontend\models\Department;
use frontend\models\DepartmentPage;
use frontend\models\Employee;
use frontend\models\Faculty;
use frontend\models\News;
use yii\web\Controller;

class DepartmentController extends Controller
{
    /**
     * @return string
     * @sitemap priority=0.84 changefreq=hourly
     */
    public function actionIndex(): string
    {
        $faculties = Faculty::find()->all();
        $departments = Department::find()
            ->orderBy(['fak_id' => SORT_ASC])
            ->all();
        return $this->render('index',
            [
                'faculties' => $faculties,
                'departments' => $departments,
            ]);
    }

    /**
     * @param int $id
     * @return string
     * @sitemap priority=0.83 changefreq=hourly route=['/department/view','id'=>$model->id]  model=backend\models\Center condition=['cate'=>2]
     */
    public function actionView(int $id): string
    {
        $department = @Department::findOne(['id' => $id]);
        $teams = Employee::find()->andFilterWhere(['cate' => $department->id])
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
     * @sitemap priority=0.82 changefreq=hourly route=['/department/about','id'=>$model->id]  model=backend\models\Center condition=['cate'=>2]
     */
    public function actionAbout(int $id): string
    {
        $department = @Department::findOne(['id' => $id]);
        $about = @DepartmentPage::find()
            ->andFilterWhere(['user_id' => $department->id])
            ->one()
            ->about;
        return $this->render('about', [
            'department' => $department,
            'about' => $about,
        ]);
    }

    /**
     * @param int $id
     * @return string
     * @sitemap priority=0.81 changefreq=hourly route=['/department/news','id'=>$model->id]  model=backend\models\Center condition=['cate'=>2]
     */
    public function actionNews(int $id): string
    {
        $department = Department::findOne(['id' => $id]);
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
        $department = Department::findOne(['id' => $id]);
        $team = Employee::findOne(['id' => $employee]);
        return $this->render('employee', [
            'team' => $team,
            'department' => $department
        ]);
    }

    /**
     * @param int $id
     * @return string
     * @sitemap priority=0.80 changefreq=hourly route=['/department/scientific','id'=>$model->id]  model=backend\models\Center condition=['cate'=>2]
     */
    public function actionScientific(int $id): string
    {
        $department = @Department::findOne(['id' => $id]);
        $scientific = DepartmentPage::findOne(['user_id' => $department->id])->scientific;
        return $this->render('scientific', [
            'department' => $department,
            'scientific' => $scientific
        ]);
    }
}