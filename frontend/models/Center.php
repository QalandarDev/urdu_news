<?php

namespace frontend\models;

use common\models\CenterModel;
use yii\db\ActiveQuery;

final class Center extends CenterModel
{
    public static function find(): ActiveQuery
    {
        return parent::find()->andFilterWhere(['cate' => 3]);
    }

    public static function findOne($condition): Center
    {
        $condition['cate'] = 3;
        return parent::findOne($condition);
    }
}