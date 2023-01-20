<?php

namespace frontend\widgets;

use frontend\models\Events;
use yii\bootstrap5\Widget;

final class EventsWidget extends Widget
{
    public function run()
    {
        $events = Events::find()->limit(3)->orderBy('id desc')->all();
        return $this->render('events', [
            'events' => $events,
        ]);
    }
}