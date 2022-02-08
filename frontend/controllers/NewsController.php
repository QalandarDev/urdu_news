<?php


namespace frontend\controllers;


use backend\models\Events;
use backend\models\Galery;
use backend\models\News;
use common\helpers\Pagination;
use yii\helpers\VarDumper;
use yii\web\Controller;
use Yii;

class NewsController extends Controller
{
    public function actionIndex(int $id = null, int $cate = null)
    {

        $this->layout = 'news';
        if ($id === null) {
            $model = News::find()->where(['user_id'=>40])->andWhere(['not',['cate'=>17]])->andWhere(['not',['cate'=>19]])->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC]);
            if ($cate !== null ) {
                $model=$model->where(['cate' => $cate]);
                $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8, 'params' => ['cate' => $cate]]);
            } else {
                $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8]);
            }
            $pages->pageSizeParam = false;
//            var_dump($pages->getOffset());
//            exit();
            $model = $model->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('index', [
                'model' => $model,
                'pages' => $pages,
                'home' => Yii::getAlias('@home'),
            ]);
        } else {
            $model = News::find()->where(['id' => $id])->one();
            return $this->render('view', [
                'model' => $model,
                'home' => Yii::getAlias('@home'),
            ]);
        }
    }


    public function actionEvents(int $id = null)
    {
        $this->layout = 'news';
        if ($id === null) {
            $model = Events::find()->orderBy(['id' => SORT_DESC]);
            $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 5]);
            $pages->pageSizeParam = false;
            $model = $model->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('events', [
                'model' => $model,
                'pages' => $pages,
                'home' => Yii::getAlias('@home'),
            ]);
        } else {
            $model = Events::findOne(['id' => $id]);
            $title = "title_" . Yii::$app->language;
            $text = "text_" . Yii::$app->language;
            $loc = "location_" . Yii::$app->language;

            return $this->render('event_views', [
                'model' => $model,
                'title' => $title,
                'text' => $text,
                'loc' => $loc,
                'home' => Yii::getAlias('@home'),
            ]);
        }
    }

    public function actionGallery()
    {
        $campus = Galery::find()->where(['type'=>1])->orderBy(['id' => SORT_ASC])->one();
        $globalization = Galery::find()->where(['type'=>2])->orderBy(['id' => SORT_ASC])->one();
        $student_life = Galery::find()->where(['type'=>3])->orderBy(['id' => SORT_ASC])->one();

//        $pages = new Pagination(['totalCount' => $galery->count(), 'pageSize' => 15]);
//
//        $pages->pageSizeParam = false;
//
//        $galery = $galery->offset($pages->offset)->limit($pages->limit)->all();
//        return $this->render('gallery', [
//            'model' => $galery,
//            'home' => Yii::getAlias('@web'),
//            'pages' => $pages,
//        ]);

        return $this->render('gallery',[
            'model'=>$campus,
            'globalization'=>$globalization,
            'student_life'=>$student_life,
            'home' => Yii::getAlias('@web'),

        ]);
    }

    public function actionGview($id){
        $model = Galery::find()->where(['type'=>$id])->all();

        return $this->render('gview', [
            'model' => $model,
            'home' => Yii::getAlias('@web'),

        ]);
    }
    public function actionVideos()
    {
        $this->layout = 'main';
        return $this->render('videos');
    }
}
