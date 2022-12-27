<?php

namespace frontend\controllers;

use backend\models\Events;
use common\helpers\Pagination;

class EventsController extends \yii\web\Controller
{
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
    public function actionView(int $id): string
    {
        $event = Events::findOne(['id' => $id]);
        return $this->render('view', [
            'event' => $event,
        ]);
    }

}