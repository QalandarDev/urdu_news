<?php


namespace frontend\widgets;


use frontend\models\News;
use yii\bootstrap5\Widget;
final class NewsWidget extends Widget
{
    public function run()
    {
        $model = News::find()->limit(3)->where(['user_id' => 40])->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC])->all();
        return $this->render('news',[
            'model' => $model,
        ]);
    }
}