<?php


namespace frontend\models;


use common\models\CenterModel;
use yii\db\ActiveQuery;

final class Faculty extends CenterModel
{
    public static function find(): ActiveQuery
    {
        return parent::find()->andFilterWhere(['cate' => 1]);
    }

    public static function findOne($condition): ?Faculty
    {
        $condition['cate'] = 1;
        return parent::findOne($condition);
    }
}