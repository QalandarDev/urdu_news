<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

use yii\base\InvalidArgumentException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ProjectsController extends Controller
{
    /**
     * {@inheritdoc}
     */
	
	   public $enableCsrfValidation=false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                //    'logout' => ['post'],
					     'search' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	
	
public function actionClass()
	{
		return $this->render('class');
	}
	
public function actionFamily()
	{
		return $this->render('family');
	}
	
	
	
  
}
