<?php

namespace frontend\controllers;


use frontend\models\NewsCategory;
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
        return $this->render('index', [
            'pages' => MenuHelpers::academicCouncil(),
            'title' => \Yii::t('news', 'Academic Council'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionScientific(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::scientificAndInnovative(),
            'title' => \Yii::t('news', 'Scientific and Innovative Activities'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionSpiritual(): string
    {
        $newsCategories = NewsCategory::find()
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