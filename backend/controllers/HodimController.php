<?php

namespace backend\controllers;

use Yii;
use backend\models\Hodim;
use backend\models\HodimSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Scholar;
use backend\models\Simplehtml;
use backend\models\Simplenode;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * HodimController implements the CRUD actions for Hodim model.
 */
class HodimController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Hodim models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->getUser()->identity->role == 0) {
            $user_id = Yii::$app->getUser()->identity->user;
            $query = Hodim::find()->where(['cate' => $user_id]);
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        } else {
            $searchModel = new HodimSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel
            ]);
        }
    }

    public function actionPublications()
    {
        if (Yii::$app->getUser()->identity->role == 0) {
            $user_id = Yii::$app->getUser()->identity->user;
            $model = Hodim::find()->where(['cate' => $user_id])->orderBy('name_uz asc');
            $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 10]);
            $pages->pageSizeParam = false;
            $model = $model->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('publications', ['model' => $model, 'pages' => $pages,
            ]);
        } else {
            $model = Hodim::find()->orderBy('name_uz asc');
            $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 10]);
            $pages->pageSizeParam = false;
            $model = $model->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('publications', ['model' => $model, 'pages' => $pages,]);
        }
    }

    public function actionPubledit($id)
    {
        //	  echo "Тизимга ўзгаришлар киритилмокда. ";


        $model = $this->findModel($id);
        if (isset($_POST['Hodim'])) {
            $model->attributes = $_POST['Hodim'];
            $myScholar = $this->hasScholar($_POST['Hodim']['scholar']);
//            	  print_r($myScholar); exit();
            if (empty($myScholar)) {
                Yii::$app->session->setFlash('warning', "Google Scholar profili faol emas!!!");
//                $model->scholar = null;
                return $this->render('publedit', [
                    'model' => $model,
                ]);
            }
            $model->GS = $myScholar['text']['publications'];
            $model->Publications = json_encode($myScholar['json']);

        }
        // print_r($model->attributes);
        //  print_r($model->load(Yii::$app->request->post()));
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('publedit', [
            'model' => $model,
        ]);

    }

    public function actionPubleditnew($id)
    {


        $model = $this->findModel($id);
        if (isset($_POST['Hodim'])) {
            $model->attributes = $_POST['Hodim'];

            $myScholar = $this->hasScholar($_POST['Hodim']['scholar']);
            //	  print_r($myScholar); exit();
            $model->GS = $myScholar['text']['publications'];
            $model->Publications = json_encode($myScholar['json']);


        }
        // print_r($model->attributes);
        //  print_r($model->load(Yii::$app->request->post()));
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('publedit', [
            'model' => $model,
        ]);

    }

    /**
     * Displays a single Hodim model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Hodim model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hodim();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hodim model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //   if (isset($_POST['Hodim'])) {$model->attributes=$_POST['Hodim'];
        //   $model->scholar=$this->hasScholar('9w6-b_gAAAAJ');}
        // print_r($model->attributes);
        //  print_r($model->load(Yii::$app->request->post()));
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }
	
	
	 public function actionUpgs()
    {
        $all=Hodim::find()->where(['cate'=>26])->asArray()->all();
		echo "<table border=1>";
        foreach ($all as $items){
		$model = $this->findModel($items['id']);
		$Publications=	json_decode($items['Publications'], true);
		printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $model['name_ru'], $Publications["total_citations"],$Publications["publications_per_year"][2016],$Publications["publications_per_year"][2017],$Publications["publications_per_year"][2018],$Publications["publications_per_year"][2019],$Publications["publications_per_year"][2020]);
		//	print_r($Publications["publications_per_year"][2020]);
		//	if (strlen($model['scholar'])==12) {printf("<a href='https://urdu.uz/admin/hodim/publedit?id=%s'>%s</a></br>",$model['id'],$model['scholar']);};
		
 		
		}; 
		 echo "</table>";
    }

    /**
     * Deletes an existing Hodim model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Hodim model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hodim the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = Hodim::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }


    protected function hasScholar($text)
    {
		
        if (strlen($text) < 12) {
          return []; 
        } else {
			
            $html = new Simplehtml;
            $myUrl = "https://scholar.google.com/citations?hl=en&user=".$text."&view_op=list_works&sortby=pubdate";
//$myUrl=$text;

//if	($html->load_file($myUrl)) { exit();};
        //    $ok=file_get_contents($myUrl);
			$ok = $html->load_file($myUrl);
            if ($ok === false) {
            // echo "Hello"; exit();  
			echo "Not";	return [];
            }

            //	exit();
//$html->load_file("https://scholar.google.com/citations?hl=en&user=sfKfjU4AAAAJ&view_op=list_works&sortby=pubdate");
//$html->load_file($myUrl);
            $str .= "{";
            if ($html->find("#gsc_rsb_st td.gsc_rsb_std", 0)->plaintext == "") {
                $str .= " \"total_citations\": 0,";
            } else {
                $str .= " \"total_citations\":" . $html->find("#gsc_rsb_st td.gsc_rsb_std", 0)->plaintext . ",";
            };
            $s = " \"citations_per_year\": { ";
            $years = $html->find('.gsc_g_t');
            $scores = $html->find('.gsc_g_al');
            foreach ($scores as $key => $score) {
                $s .= "  \"" . trim($years[$key]->plaintext) . "\": " . trim($score->plaintext) . ",";
            }
            $str .= substr($s, 0, -1) . " },";
            $str .= " \"publications\": [";
            foreach ($html->find("#gsc_a_t .gsc_a_tr") as $pub) {
                $str .= "  {    \"title\": \"" . trim($pub->find(".gsc_a_at", 0)->plaintext);
                $str .= "\",    \"authors\": \"" . trim($pub->find(".gs_gray", 0)->plaintext);
                $str .= "\",    \"venue\": \"" . trim($pub->find(".gs_gray", 1)->plaintext);
                if (!is_numeric($pub->find(".gsc_a_ac", 0)->plaintext))
                    $str .= "\",    \"citations\": 0";
                else
                    $str .= "\",    \"citations\": " . $pub->find(".gsc_a_ac", 0)->plaintext;
                if ($pub->find(".gsc_a_h", 0)->plaintext == " ")
                    $str .= ",    \"year\": 0";
                else
                    $str .= ",    \"year\": " . $pub->find(".gsc_a_h", 0)->plaintext;
                $str .= "  },";
            }
            $mystr = substr($str, 0, -1) . "]}";
            $myArray = json_decode($mystr, true);
            $myScholar['json']['total_citations'] = $myArray['total_citations'];
            $myScholar['json']['citations_per_year'] = $myArray['citations_per_year'];
            $publications = $myArray['publications'];
//print_r($myArray); exit();
//echo $mystr;
            //		 $myScholar=array();
            if (is_array($publications) && sizeof($publications) > 0) {
                $publications = ArrayHelper::index($publications, null, 'year');


                foreach ($publications as $key => $value) {
                    $i = 0;
                    $mypubl = $mypubl . "<h5 style='border-bottom: 1px solid #eee; padding: 10px 0 5px;'><b>" . $key . "</b></h5><ul style='line-height: 20px;'>";
                    foreach ($value as $a) {
                        $i++;
                        $mypubl = $mypubl . "<li style='padding-bottom: 10px'><b>" . $i . ") " . $a['title'] . "</b>,<br>" . $a['authors'] . ",<br>" . $a['venue'] . "</li>";
                    }
                    $mypubl = $mypubl . "</ul>";
                    $publications_per_year[$key] = $i;
                };

                $myScholar['json']['publications_per_year'] = $publications_per_year;
                $myScholar['text']['publications'] = $mypubl . "Last update: " . date("d-m-Y, H:i");
            } else {$myScholar['text']['publications']=""; $myScholar['json']['publications_per_year']=[]; };

            return $myScholar;


        };


    }

}
