<?php

namespace frontend\controllers;

use backend\models\About;
use backend\models\AllAction;
use backend\models\Avtoreferat;
use backend\models\Center;
use backend\models\DarsJadval;
use backend\models\CenterPage;
use backend\models\Events;
use backend\models\Lavozimlar;
use backend\models\Newcate;
use backend\models\News;
use backend\models\Vidio;
use backend\models\Rectorate;
use backend\models\Galery;
use backend\models\Programm;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\Pagination;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Hodim;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;
use yii\helpers\Html;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
                    'logout' => ['post'],
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

    public function actionSearch()
    {
        $news = News::find();
        if (isset($_GET['text']) and strlen($_GET['text']) >= 3) {
            $news->where(['like', 'text_' . Yii::$app->language, '%' . $_GET['text'] . '%', false]);
            $news->andWhere(['like', 'title_' . Yii::$app->language, '%' . $_GET['text'] . '%', false]);
            $news->orderBy('date desc');

            if ($news->count() == 0) {
                $error = Yii::t('app', 'No result');
                // throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
            };
            $pages = new Pagination(['totalCount' => $news->count(), 'pageSize' => 20]);
            $pages->pageSizeParam = false;
            $news = $news->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('search', ['result' => $news, 'pages' => $pages, 'count' => $count, 'haserror' => $error,
            ]);

        };


    }

    public function actionNormative()
    {
        $titlelang = array('title_uz' => "Me'yoriy-huquqiy hujjatlar", 'title_ru' => 'Нормативно-правовые документы', 'title_en' => 'Regulatory documents');
        $titleview = array('title_uz' => "Ko'rish", 'title_ru' => 'Посмотреть', 'title_en' => 'View');

        return $this->render('normative', [
            'titlelang' => $titlelang,
            'titleview' => $titleview
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionVidio()
    {
        $model = Vidio::find()->orderBy('id desc')->all();
        return $this->render('vidio', [
            'model' => $model
        ]);
    }

    public function actionIndex(): string
    {
        Yii::$app->session->set('frontendTranslation_EnableTranslate', true);
        $model = News::find()->limit(3)->where(['user_id' => 40])->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC])->all();
        $events = Events::find()->limit(3)->orderBy('id desc')->all();
        return $this->render('index', [
            'model' => $model,
            'events' => $events,
        ]);
    }

//    public function actionIndex()
//    {
//        $model=Maqola::find()->where(['active' => 1])->limit(1)->orderBy('id desc')->all();
//
//        $model1 = new Maqola();
//        $model1=Maqola::find()->where(['active' => 1])->orderBy('id desc');
//        $pages = new Pagination(['totalCount' => $model1->count(), 'pageSize' => 3]);
//        $pages->pageSizeParam = false;
//        $model1 = $model1->offset($pages->offset)->limit($pages->limit)->all();
//        $title="title_".Yii::$app->language;
//        $text="text_".Yii::$app->language;
//        $titlelang = array('title_uz'=>'ТАВСИЯ ҚИЛИНАДИГАН МАҚОЛАЛАР','title_ru'=>'РЕКОМЕНДОВАННЫЕ СТАТЬИ','title_en'=>'RECOMMENDED ARTICLES');
//        return $this->render('index',[
//            'model'=>$model,
//            'model1'=>$model1,
//            'title'=>$title,
//            'pages' => $pages,
//            'text'=>$text,
//            'titlelang' => $titlelang
//        ]);
//    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */

    public function actionFacultyteam($id)
    {
        $this->layout = 'faculty';
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $views = Hodim::find()->where(['cate' => $model['id']])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();

        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $bio = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('facultyteam', [
            'model' => $model,
            'hodim' => $hodim,
            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'bio' => $bio,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'view' => $view,
            'views' => $views,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
        ]);
    }

    public function actionGallery()
    {


        $galery = Galery::find()->orderBy(['id' => SORT_DESC]);

        $pages = new Pagination(['totalCount' => $galery->count(), 'pageSize' => 15]);

        $pages->pageSizeParam = false;

        $galery = $galery->offset($pages->offset)->limit($pages->limit)->all();
        $galt = "title_" . Yii::$app->language;
        $galte = "text_" . Yii::$app->language;
        return $this->render('gallery', [

            'galery' => $galery,
            'galt' => $galt,
            'galte' => $galte,
            'home' => Yii::getAlias('@home'),
            'pages' => $pages,
        ]);
    }

    public function actionActive($id)
    {
        $this->layout = 'faol';
        $model = AllAction::find()->where(['id' => $id])->one();

        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;

        return $this->render('allaction', [
            'model' => $model,
            'title' => $title,
            'id' => $id,
            'text' => $text,
            'home' => Yii::getAlias('@home'),
        ]);

    }

    public function actionView($id)
    {
        $this->layout = 'news';
        $model = News::find()->where(['id' => $id])->one();

        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;

        return $this->render('view', [
            'model' => $model,
            'title' => $title,
            'text' => $text,
            'home' => Yii::getAlias('@home')
        ]);

    }

    public function actionViews($id)
    {
        $this->layout = 'events';


        $model = Events::find()->where(['id' => $id])->one();

        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;

        return $this->render('views', [
            'model' => $model,
            'title' => $title,
            'text' => $text,
            'loc' => $loc,
            'home' => Yii::getAlias('@home')
        ]);

    }

    public function actionNews()
    {

        $this->layout = 'news';
        $titlelang = array('title_uz' => "So'ngi yangiliklar", 'title_ru' => 'Последние новости', 'title_en' => 'Latest news');
        $model = News::find()->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;

        return $this->render('news', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'text' => $text,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home'),
        ]);

    }

    public function actionViewcate($id)
    {
        $this->layout = 'news';
        $titlelang = Newcate::find()->where(['id' => $id])->one();
        $model = News::find()->where(['cate' => $id])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 5]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('newcate', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'text' => $text,
            'name' => $name,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionCenter()
    {
        $this->layout = 'center';

        $model = Center::find()->where(['cate' => 3])->all();

        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        return $this->render('center', [
            'model' => $model,
            'name' => $name,
            'text' => $text,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionVakursu()
    {
        $this->layout = '_vacursu';
        return $this->render('vacursu');
    }

    public function actionFaculty()
    {
        $this->layout = 'struc';
        $model = Center::find()->where(['cate' => 1])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        return $this->render('faculty', [
            'model' => $model,
            'name' => $name,
            'text' => $text,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionDepartment()
    {
        $this->layout = 'struc';
        $model = Center::find()->where(['cate' => 2])->orderBy(['fak_id' => SORT_ASC])->asArray()->all();//->groupBy(['fak_id'])->all();
        $fakultet = Center::find()->where(['cate' => 1])->asArray()->all();//->groupBy(['fak_id'])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        return $this->render('department', [
            'model' => $model,
            'fakultet' => $fakultet,
            'name' => $name,
            'text' => $text,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionCenterview($id)
    {
        $this->layout = 'center';
//        $model = News::find()->limit(3)->orderBy('id desc')->all();
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $hodim = Hodim::find()->where(['cate' => $id])->leftJoin(['lv' => Lavozimlar::tableName()], 'lv.id=lav_id')->orderBy(['lv.cat' => SORT_ASC, 'lav_id' => SORT_DESC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $hol = array('title_uz' => "CV", 'title_ru' => 'CV', 'title_en' => 'CV');
        return $this->render('centerview2', [
            'model' => $model,
            'name' => $name,
            'text' => $text,
            'hol' => $hol,
            'lav' => $lav,
            'hodim' => $hodim,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionCenterAbout($id)
    {
        $this->layout = 'center';
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $hodim = Hodim::find()->where(['cate' => $id])->orderBy(['lav_id' => SORT_ASC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $hol = array('title_uz' => "CV", 'title_ru' => 'CV', 'title_en' => 'CV');
        return $this->render('center-about', [
            'model' => $model,
            'name' => $name,
            'text' => $text,
            'hol' => $hol,
            'lav' => $lav,
            'hodim' => $hodim,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }


    public function actionFacultyview($id)
    {
        $programm = Programm::find()->where(['fac_id' => $id])->all();
        $this->layout = 'faculty';
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $hodim = Hodim::find()->where(['cate' => $model['id']])->orderBy(['lav_id' => SORT_ASC])->all();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $document = "document_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('facultyview', [
            'programm' => $programm,
            'home' => Yii::getAlias('@home'),
            'model' => $model,
            'hodim' => $hodim,
            'name' => $name,
            'ilm' => $ilm,
            'id' => $id,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'document' => $document,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
        ]);
    }

    public function actionFacultyabout($id)
    {
        $this->layout = 'faculty';
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $document = "document_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('facultyabout', [
            'home' => Yii::getAlias('@home'),
            'model' => $model,
            'name' => $name,
            'ilm' => $ilm,
            'id' => $id,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'document' => $document,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
        ]);
    }

    public function actionFacultynews($id)
    {
        $this->layout = 'faculty';
        $model = Center::find()->where(['id' => $id])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $document = "document_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('facultynews', [
            'home' => Yii::getAlias('@home'),
            'model' => $model,
            'name' => $name,
            'ilm' => $ilm,
            'id' => $id,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'document' => $document,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
        ]);
    }

    public function actionFacultydoc($id)
    {
        $this->layout = 'faculty';
        $model = Center::find()->where(['id' => $id])->one();
        $programm = Programm::find()->where(['fac_id' => $id])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $document = "document_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('facultydoc', [
            'home' => Yii::getAlias('@home'),
            'model' => $model,
            'name' => $name,
            'ilm' => $ilm,
            'id' => $id,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'document' => $document,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'programm' => $programm,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
        ]);
    }

    public function actionDepartmentview($id)
    {
        $this->layout = 'department';

        $model = Center::find()->where(['id' => $id])->one();

        $view = CenterPage::find()->where(['user_id' => $id])->one();

        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();


        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;

        return $this->render('departmentview', [
            'model' => $model,

            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'news' => $news,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionDepartmentviewemployee($id)
    {
        $this->layout = 'department';
        $model = Center::find()->where(['id' => $id])->one();
        $hodim = Hodim::find()->where(['cate' => $model['id']])->orderBy(['lav_id' => SORT_ASC])->all();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();

        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;

        return $this->render('departmentviewemployee', [
            'model' => $model,
            'hodimlar' => $hodim,
            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionDepartmentnews($id)
    {
        $this->layout = 'department';
        $model = Center::find()->where(['id' => $id])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();

        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('departmentnews', [
            'model' => $model,
            'news' => $news,
            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionDepartmentscientific($id)
    {
        $this->layout = 'department';
        $model = Center::find()->where(['id' => $id])->one();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['id' => SORT_DESC])->all();

        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('departmentscientific', [
            'model' => $model,
            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionEvents()
    {
        $this->layout = 'events';
        $titlelang = array('title_uz' => 'So\'ngi e\'lonlar', 'title_ru' => 'Последние события', 'title_en' => 'Latest events');
        $model = Events::find()->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 5]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        return $this->render('events', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'loc' => $loc,
            'text' => $text,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionViewevent($id)
    {
        $this->layout = 'news';
        $titlelang = Newcate::find()->where(['id' => $id])->one();
        $model = Events::find()->where(['cate' => $id])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 5]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('eventcate', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'loc' => $loc,
            'text' => $text,
            'name' => $name,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $this->layout = "struc";
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $model = About::find()->where(['cate' => 1])->one();
        return $this->render('about', [
            'model' => $model,
            'title' => $title,
            'text' => $text,
        ]);
    }

    public function actionNizom()
    {
        $this->layout = "struc";
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $model = About::find()->where(['cate' => 2])->one();
        return $this->render('about', [

            'model' => $model,
            'title' => $title,
            'text' => $text,
        ]);
    }

    public function actionRektorat()
    {
        $this->layout = "struc";
        $model = News::find()->limit(3)->orderBy('id desc')->all();
        $events = Events::find()->limit(3)->orderBy('id desc')->all();
        $team = Rectorate::find()->all();
        $galery = Galery::find()->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $galery->count(), 'pageSize' => 9]);
        $pages->pageSizeParam = false;
        $galery = $galery->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $titlet = "titlet_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $address = "address_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $bio = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $galt = "title_" . Yii::$app->language;
        $galte = "text_" . Yii::$app->language;
        $titleev = "title_" . Yii::$app->language;
        $hol = array('title_uz' => "Tarjimai hol", 'title_ru' => ' Автобиография', 'title_en' => ' Autobiography');
        $textev = "text_" . Yii::$app->language;
        $titlelang = array('title_uz' => "So'ngi yangiliklar", 'title_ru' => 'Последние новости', 'title_en' => 'Latest news');
        $titlelangev = array('title_uz' => 'So\'ngi e\'lonlar', 'title_ru' => 'Последние события', 'title_en' => 'Latest events');
        $loc = "location_" . Yii::$app->language;

        return $this->render('rektorat', [

            'model' => $model,
            'title' => $title,
            'team' => $team,
            'titlet' => $titlet,
            'name' => $name,
            'loc' => $loc,
            'pages' => $pages,
            'galt' => $galt,
            'galte' => $galte,
            'galery' => $galery,
            'position' => $position,
            'address' => $address,
            'reception' => $reception,
            'bio' => $bio,
            'text' => $text,
            'events' => $events,
            'titleev' => $titleev,
            'textev' => $textev,
            'titlelang' => $titlelang,
            'titlelangev' => $titlelangev,
            'hol' => $hol,
            'home' => Yii::getAlias('@home'),

        ]);
    }

    public function actionViewteam($id)
    {
        $this->layout = "struc";
        $model = News::find()->limit(3)->orderBy('id desc')->all();
        $events = Events::find()->limit(3)->orderBy('id desc')->all();
        $team = Rectorate::find()->where(['id' => $id])->one();
        $galery = Galery::find()->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $galery->count(), 'pageSize' => 9]);
        $pages->pageSizeParam = false;
        $galery = $galery->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $titlet = "titlet_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $address = "address_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $bio = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        $galt = "title_" . Yii::$app->language;
        $autobiography = "autobiography_" . Yii::$app->language;
        $galte = "text_" . Yii::$app->language;
        $titleev = "title_" . Yii::$app->language;
        $textev = "text_" . Yii::$app->language;
        $hol = array('title_uz' => "Tarjimai hol", 'title_ru' => ' Автобиография', 'title_en' => ' Autobiography');
        $titlelangev = array('title_uz' => 'So\'ngi e\'lonlar', 'title_ru' => 'Последние события', 'title_en' => 'Latest events');
        $loc = "location_" . Yii::$app->language;

        return $this->render('viewteam', [

            'model' => $model,
            'title' => $title,
            'team' => $team,
            'hol' => $hol,
            'titlet' => $titlet,
            'autobiography' => $autobiography,
            'name' => $name,
            'loc' => $loc,
            'pages' => $pages,
            'galt' => $galt,
            'galte' => $galte,
            'galery' => $galery,
            'position' => $position,
            'address' => $address,
            'reception' => $reception,
            'bio' => $bio,
            'text' => $text,
            'events' => $events,
            'titleev' => $titleev,
            'textev' => $textev,
            'home' => Yii::getAlias('@home'),
            'titlelangev' => $titlelangev,
        ]);
    }

    public function actionViewcen($id)
    {
        $this->layout = "struc";
        $team = Hodim::find()->where(['id' => $id])->one();
        $name = "name_" . Yii::$app->language;
        $autobiography = "text_" . Yii::$app->language;
        $hol = array('title_uz' => "CV", 'title_ru' => 'CV', 'title_en' => 'CV');
        $lav = "lav_" . Yii::$app->language;

        return $this->render('viewcen', [

            'team' => $team,
            'hol' => $hol,
            'autobiography' => $autobiography,
            'name' => $name,
            'lav' => $lav,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionViewdep($id)
    {
        // $this->layout='staff';
        $this->layout = "struc";
        $jadval = DarsJadval::find()->where(['staff_id' => $id])->andWhere(['semid' => 1])->orderBy('kun,juftlik')->all();
        $team = Hodim::find()->where(['id' => $id])->one();
        $name = "name_" . Yii::$app->language;
        $autobiography = "text_" . Yii::$app->language;
        $hol = array('title_uz' => "CV", 'title_ru' => 'CV', 'title_en' => 'CV');
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;

        return $this->render('depcv', [

            'team' => $team,
            'hol' => $hol,
            'ilm' => $ilm,
            'jadval' => $jadval,
            'ilm1' => $ilm1,
            'autobiography' => $autobiography,
            'name' => $name,
            'lav' => $lav,
            'home' => Yii::getAlias('@home')
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionHonorable()
    {
        $id = 17;
        $this->layout = 'news';
        $titlelang = array('title_uz' => "Faxriy bitiruvchilar", 'title_ru' => 'Почетные выпускники', 'title_en' => 'Honorable alumni');
        $model = News::find()->where(['cate' => $id])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        return $this->render('news', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'text' => $text,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home'),
        ]);


    }

    public function actionHonorable1()
    {
        $id = 19;
        $this->layout = 'news';
        $titlelang = array('title_uz' => "Faxriy bitiruvchilar", 'title_ru' => 'Почетные выпускники', 'title_en' => 'Honorable alumni');
        $model = News::find()->where(['cate' => $id])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 8]);
        $pages->pageSizeParam = false;
        $model = $model->offset($pages->offset)->limit($pages->limit)->all();
        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        return $this->render('news1', [
            'model' => $model,
            'title' => $title,
            'pages' => $pages,
            'text' => $text,
            'titlelang' => $titlelang,
            'home' => Yii::getAlias('@home'),
        ]);


    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @return yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionSinus()
    {
        return Html::a("salom", ['/site/sinus', 'salom' => 'sinus']);
    }

    public function actionCenternews($id)
    {
        $this->layout = 'center';
        $model = Center::find()->where(['id' => $id])->one();
        $news = News::find()->where(['user_id' => $id])->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC])->all();
        $view = CenterPage::find()->where(['user_id' => $id])->one();
        $events = Events::find()->where(['user_id' => $id])->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC])->all();

        $name = "name_" . Yii::$app->language;
        $text = "content_" . Yii::$app->language;
        $lav = "lav_" . Yii::$app->language;
        $ilm = "ilm_" . Yii::$app->language;
        $ilm1 = "ilm1_" . Yii::$app->language;
        $newtext = "text_" . Yii::$app->language;
        $newtitle = "title_" . Yii::$app->language;
        $eventtext = "text_" . Yii::$app->language;
        $eventtitle = "title_" . Yii::$app->language;
        $loc = "location_" . Yii::$app->language;
        $about = "about_" . Yii::$app->language;
        $position = "position_" . Yii::$app->language;
        $sname = "name_" . Yii::$app->language;
        $reception = "reception_" . Yii::$app->language;
        $ilmiy = "ilmiy_" . Yii::$app->language;
        $aloqa = "aloqa_" . Yii::$app->language;
        $grant = "grant_" . Yii::$app->language;
        $name = "name_" . Yii::$app->language;
        return $this->render('centernews', [
            'model' => $model,
            'news' => $news,
            'name' => $name,
            'ilm' => $ilm,
            'ilm1' => $ilm1,
            'aloqa' => $aloqa,
            'lav' => $lav,
            'grant' => $grant,
            'ilmiy' => $ilmiy,
            'text' => $text,
            'newtext' => $newtext,
            'newtitle' => $newtitle,
            'eventtext' => $eventtext,
            'eventtitle' => $eventtitle,
            'view' => $view,
            'loc' => $loc,
            'about' => $about,
            'position' => $position,
            'reception' => $reception,
            'sname' => $sname,
            'events' => $events,
            'home' => Yii::getAlias('@home')
        ]);
    }

    public function actionAvtoreferat()
    {
        return $this->render('avtoref');
    }

    public function actionFileopen($file)
    {
        $filename = Avtoreferat::findOne(['file' => $file]);
        $file_path = Yii::getAlias('@public') . '/uploads/avtoreferat/' . $filename->file;
        return Yii::$app->response->sendFile($file_path, $filename->file);
    }
}