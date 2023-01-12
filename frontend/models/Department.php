<?php

namespace frontend\models;


use common\models\CenterModel;
use yii\db\ActiveQuery;

class Department extends CenterModel
{
    final public static function find(): ActiveQuery
    {
        return parent::find()->andFilterWhere(['cate' => 2]);
    }

    final public static function findOne($condition): Department
    {
        $condition['cate'] = 2;
        return parent::findOne($condition);
    }
}