<?php

namespace frontend\controllers;


use backend\models\Newcate;
use common\helpers\MenuHelpers;
use frontend\models\Page;
use yii\web\Controller;

class ActivityController extends Controller
{
    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionAcademic(): string
    {
        $actions = Page::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::academicCouncil()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'Academic Council'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionScientific(): string
    {
        $actions = Page::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::scientificAndInnovative()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'Scientific and Innovative Activities'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
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

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionInternational(): string
    {
        $actions = Page::find()
            ->select(['id', 'title_ru', 'title_uz', 'title_en', 'date', 'cate'])
            ->andFilterWhere(['in', 'id', MenuHelpers::International()])
            ->orderBy(['id' => SORT_ASC])
            ->all();
        return $this->render('academic', [
            'actions' => $actions,
            'menuName' => \Yii::t('news', 'International Relations'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionFinancial(): string
    {
        $actions = Page::find()
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