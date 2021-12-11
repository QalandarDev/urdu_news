<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use backend\models\Hodim;
use yii\base\InvalidArgumentException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Center;
use yii\helpers\ArrayHelper;

class StaffController extends Controller
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
				//	     'search' => ['post'],
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
	
	
public function actionIndex()
	{
		 $this->layout='staff';
	$model = Hodim::find()->orderBy('name_en asc');

	  if (!isset($_POST['Search'])){
	
	$model = Hodim::find()->orderBy('name_en asc');
	
	} else {
		
	$model = Hodim::find();
		  if (!empty($_POST['Search']['name'])) {
    $model->where(['like', 'name_'.Yii::$app->language, '%'.$_POST['Search']['name'].'%',false]);
    $model->orWhere(['id'=>$_POST['Search']['name']]);};
		   if (!empty($_POST['Search']['dep'])) {
			   $model->andWhere(['cate'=>$_POST['Search']['dep']]);
		   };
		   if (!empty($_POST['Search']['filters'])) {
			   $model->andWhere(['cat'=>$_POST['Search']['filters']]);
		   };
    $model->orderBy('name_en asc');
       
	//   $resultsearch->mysearch(array('name_uz'=>'Anvar'));
	 // print_r($resultsearch->mysearch(array('name_uz'=>'Anvar')));
       };
       $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 20]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
		return $this->render('index',['model'=>$model, 'pages'=>$pages, 
		]);
	}
	
	 public function actionPublactivity()
    {
    if (isset($_POST['fakultet'])){ 
		$myfakultet=$_POST['fakultet']; 
		$kafedralar =  ArrayHelper::map(Center::find()->select(['id' , 'name_'.Yii::$app->language])->where(['cate' => 2])->andWhere(['fak_id'=>$myfakultet])->orderBy(['id' => SORT_ASC])->all(),'id' , 'name_'.Yii::$app->language);} else $kafedralar=[] ;
		 // $model = Center::find()->where(['cate' => 2])->orderBy(['fak_id' => SORT_ASC])->asArray()->all();//->groupBy(['fak_id'])->all();
		$fakultetlar =  ArrayHelper::map(Center::find()->select(['id' , 'name_'.Yii::$app->language])->where(['cate' => 1])->orderBy(['id' => SORT_ASC])->all(),'id' , 'name_'.Yii::$app->language);
			//->groupBy(['fak_id'])->all();
     //   $name = "name_" . Yii::$app->language;
		 
		   if (isset($_POST['kafedra'])){$mykafedra= $_POST['kafedra']; 
			 $model=Hodim::find()->where(['lav_id'=>[5,6,7,8,9]])->andWhere(['cate'=>$mykafedra])->orderBy('name_en asc'); $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 100]);} 
		 else {$model=Hodim::find()->where(['lav_id'=>[5,6,7,8,9]])->orderBy('name_en asc'); $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 100]);};
		 
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
		
		return $this->render('view',['model'=>$model, 'pages'=>$pages,'fakultetlar'=>$fakultetlar,'kafedralar'=>$kafedralar]); 
		
    }

	
	public function actionSearch($q = null, $id = null) {
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $out = ['results' => ['id' => '', 'text' => '']];
    if (!is_null($q)) {
        $query = new \yii\db\Query;
         $query->select('id, name_'.Yii::$app->language.' AS text')
            ->from('hodim')
            ->where(['like', 'name_'.Yii::$app->language, $q])
            ->limit(20);
        $command = $query->createCommand();
        $data = $command->queryAll();
        $out['results'] = array_values($data);
    }
    elseif ($id > 0) {
        $out['results'] = ['id' => $id, 'text' => Hodim::find($id)->name_uz];
    }
    return $out;
}
	
	
  
}
