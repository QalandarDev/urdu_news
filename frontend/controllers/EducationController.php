<?php


namespace frontend\controllers;


use Page;
use backend\models\Center;
use backend\models\Edu;
use backend\models\News;
use yii\base\BaseObject;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\httpclient\Client;
use yii\web\Controller;
use Yii;
use yii\web\Response;

class EducationController extends Controller
{


//    public function behaviors()
//    {
//        return [
//            'verb' => [
//                'class' => VerbFilter::class,
//                'actions' => [
//                    'subcat' => ['POST'],
//                ]
//            ]
//        ];
//    }
    public $enableCsrfValidation = false;

    public function actionNews(int $id = null)
    {
//        $this->layout = 'news';
        if ($id === null) {
            $model = News::find()->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC])->where(['cate' => 15]);
            $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8]);
            $pages->pageSizeParam = false;
            $model = $model->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('news', [
                'model' => $model,
                'pages' => $pages,
                'home' => Yii::getAlias('@home'),
            ]);
        } else {
            $model = News::find()->where(['id' => $id, 'cate' => 15])->one();
            return $this->render('view', [
                'model' => $model,
                'home' => Yii::getAlias('@home'),
            ]);
        }
    }

    public function actionNormative()
    {
        return $this->render('normative', [
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionMetodic()
    {
        return $this->render('metodic', [
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function view(int $id = null)
    {
        $model = News::find()->where(['id' => $id, 'cate' => 15])->one();
        return $this->render('view', [
            'model' => $model,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionSchedule()
    {
        $model = new Edu();
        $data = [];
        if ($this->request->isGet && $model->load($this->request->get())) {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('POST')
                ->setUrl("https://talim.urdu.uz/api/schedule?ScheduleSearch[_department]={$model->department}&ScheduleSearch[_group]={$model->group}")
                ->send();
//            var_dump($response);
            if ($response->getIsOk()) {
                $data = $response->getData();
//VarDumper::dump(date('W',time()),10,true);
//exit();
                return $this->render('schedule', [
                    'model' => $model,
                    'data' => $data
                ]);
            }
        }
        return $this->render('schedule', ['model' => $model,
            'data' => $data
        ]);
    }

    public function actionSubcat()
    {
        $this->response->format = Response::FORMAT_JSON;
        $out = [];
        $array = [];
        if (Yii::$app->request->isAjax && isset($_POST['depdrop_parents'])) {

            $parents = $_POST['depdrop_parents'];
            $cat_id = empty($parents[0]) ? null : $parents[0];
            $course_id = empty($parents[1]) ? null : $parents[1];
            if ($parents[0] != null && $parents[1] != null) {

                $client = new Client();
                $response = $client->createRequest()
                    ->setMethod('GET')
                    ->setUrl('https://talim.urdu.uz/api/groups?dep='.$cat_id.'&level='.$course_id)
                    ->send();

                if ($response->isOk) {
                    $out = $response->getData();
                    foreach ($out as $key => $item) {
                        $array[] = ['id' => $item['id'], 'name' => $item['name']];
                    }
//                    file_put_contents('out.json',json_encode($out));
                    return ['output' => $array, 'selected' => ''];

                }

            }
        } else
            return ['output' => '', 'selected' => ''];
    }
    public function actionSubcat1()
    {
        $this->response->format = Response::FORMAT_JSON;
        $out = [];
        $array = [];
        if (Yii::$app->request->isAjax && isset($_POST['depdrop_parents'])) {

            $parents = $_POST['depdrop_parents'];
            $course_id = empty($parents[0]) ? null : $parents[0];
            if ($parents[0] != null) {

                $client = new Client();
                $response = $client->createRequest()
                    ->setMethod('GET')
                    ->setUrl('https://talim.urdu.uz/api/groups?dep=76&level='.$course_id)
                    ->send();

                if ($response->isOk) {
                    $out = $response->getData();
                    foreach ($out as $key => $item) {
                        $array[] = ['id' => $item['id'], 'name' => $item['name']];
                    }
//                    file_put_contents('out.json',json_encode($out));
                    return ['output' => $array, 'selected' => ''];

                }

            }
        } else
            return ['output' => '', 'selected' => ''];
    }

    public function actionMschedule()
    {
        $model = new Edu();
        $data1 = [];
        if ($this->request->isGet && $model->load($this->request->get())) {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('POST')
                ->setUrl("https://talim.urdu.uz/api/schedule?ScheduleSearch[_department]=76&ScheduleSearch[_group]={$model->group}")
                ->send();
            if ($response->getIsOk()) {
                $data1 = $response->getData();
                return $this->render('mschedule', [
                    'model' => $model,
                    'data' => $data1,
                ]);
            }
        }
        return $this->render('mschedule', ['model' => $model,
            'data' => $data1
        ]);
    }
    public function actionBschedule(){
        $model = new Edu();
        $data = [];
        if ($this->request->isGet && $model->load($this->request->get())) {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('POST')
                ->setUrl("https://talim.urdu.uz/api/schedule?ScheduleSearch[_department]={$model->department}&ScheduleSearch[_group]={$model->group}")
                ->send();
            if ($response->getIsOk()) {
                $data = $response->getData();

                return $this->render('bschedule', [
                    'model' => $model,
                    'data' => $data
                ]);
            }
        }
        return $this->render('bschedule', ['model' => $model,
            'data' => $data
        ]);

    }
}
