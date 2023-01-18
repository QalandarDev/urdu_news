<?php

namespace frontend\controllers;


use frontend\models\NewsCategory;
use common\helpers\MenuHelpers;
use frontend\models\Page;
use Yii;
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
            'title' => Yii::t('news', 'Academic Council'),
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
            'title' => Yii::t('news', 'Scientific and Innovative Activities'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionSpiritual(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::spiritualAndEducational(),
            'title' => Yii::t('news', 'Spiritual and educational activities'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionInternational(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::International(),
            'title' => Yii::t('news', 'International Relations'),
        ]);
    }

    /**
     * @return string
     * @sitemap priority=0.76 changefreq=daily
     */
    public function actionFinancial(): string
    {
        return $this->render('index', [
            'pages' => MenuHelpers::financial(),
            'title' => Yii::t('news', 'Financial Activities'),
        ]);
    }

}