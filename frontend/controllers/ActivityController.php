<?php

namespace frontend\controllers;


use backend\models\AllAction;
use backend\models\Newcate;
use common\helpers\MenuHelpers;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionAcademic(): string
    {
        $actions = AllAction::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::academicCouncil()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'Academic Council'),
        ]);
    }

    public function actionScientific(): string
    {
        $actions = AllAction::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::scientificAndInnovative()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'Scientific and Innovative Activities'),
        ]);
    }

    public function actionSpiritual(): string
    {
        $newsCategories = Newcate::find()
            ->andFilterWhere(['in', 'id', MenuHelpers::spiritualAndEducational()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('spirtual', [
            'newsCategories' => $newsCategories,
            'menuName' => \Yii::t('news', 'Spiritual and educational activities'),
        ]);
    }

    public function actionInternational(): string
    {
        $actions = AllAction::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::International()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'International Relations'),
        ]);
    }
    public function actionFinancial():string
    {
        $actions = AllAction::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::financial()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'Financial Activities'),
        ]);
    }

}