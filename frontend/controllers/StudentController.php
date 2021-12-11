<?php


namespace frontend\controllers;


use backend\models\AllAction;
use yii\web\Controller;
use Yii;

class StudentController extends Controller
{
    public function actionIndex()
    {

//        return $this->render('index');
        $this->layout = 'faol';
        $model = AllAction::find()->where(['id' => 106])->one();

        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;

        return $this->render('index1', [
            'model' => $model,
            'title' => $title,
            'id' => 106,
            'text' => $text,
            'home' => Yii::getAlias('@home'),
        ]);
    }

    public function actionMagistr()
    {
        return $this->render('magistr');
    }
	public function actionMagistrMandat()
	{
		return $this->render('mandat');
	}

    public function actionCallCenter()
    {
        $this->layout = 'faol';
        $model = AllAction::find()->where(['id' => 137])->one();

        $title = "title_" . Yii::$app->language;
        $text = "text_" . Yii::$app->language;
        return $this->render('call-center',[
            'model' => $model,
            'title' => $title,
            'id' => 106,
            'text' => $text,
            'home' => Yii::getAlias('@home'),
        ]);
	}
}
