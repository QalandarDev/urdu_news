<?php

namespace frontend\models;


use common\models\NewsModel;
use yii\db\ActiveQuery;

final class News extends NewsModel
{
    public static function findByUser($id): ActiveQuery
    {
        return self::find()
            ->andFilterwhere(['user_id' => $id])
            ->orderBy(['id' => SORT_DESC]);
    }
}