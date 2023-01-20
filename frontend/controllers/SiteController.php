<?php

namespace frontend\controllers;

use frontend\models\Events;
use frontend\models\News;
use Yii;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    /**
     * @sitemap priority=1.0
     */
    public function actionIndex(): string
    {
        Yii::$app->session->set('frontendTranslation_EnableTranslate', true);
        return $this->render('index');
    }

}