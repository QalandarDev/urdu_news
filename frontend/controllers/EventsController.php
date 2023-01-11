<?php

namespace frontend\controllers;

use common\helpers\Pagination;
use frontend\models\Events;

class EventsController extends \yii\web\Controller
{
    /***
     * @return string
     */
    public function actionIndex(): string
    {
        $events = Events::find()
            ->orderBy(['date' => SORT_DESC, 'id' => SORT_DESC]);
        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $events->count(),
        ]);
        $events = $events->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index',
            [
                'events'=>$events,
                'pagination'=>$pagination
            ]);
    }

    /**
     * @sitemap priority=0.93 changefreq=hourly route=['/events/view','id'=>$model->id]  model=backend\models\Events condition='id'<>0
     */
    public function actionView(int $id): string
    {
        $event = Events::findOne(['id' => $id]);
        return $this->render('view', [
            'event' => $event,
        ]);
    }

}