<?php


namespace frontend\controllers;


use backend\models\AllAction;
use yii\web\Controller;

class VacancyController extends Controller
{
    public function actionIndex()
    {
        $model = AllAction::find()->where(['cate' => 11])->one();
        return $this->render('index',[
            'model' => $model,
        ]);
    }
}
