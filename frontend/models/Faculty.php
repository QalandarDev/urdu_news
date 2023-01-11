<?php


namespace frontend\models;


use common\models\CenterModel;
use yii\db\ActiveQuery;

class Faculty extends CenterModel
{
    final public static function find(): ActiveQuery
    {
        return parent::find()->andFilterWhere(['cate' => 1]);
    }

    final public static function findOne($condition): ?Faculty
    {
        $condition['cate'] = 1;
        return parent::findOne($condition);
    }
}