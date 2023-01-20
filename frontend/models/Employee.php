<?php

namespace frontend\models;


use common\models\EmployeeModel;

final class Employee extends EmployeeModel
{
    public static function findByCategory($id): array
    {
        return self::find()
            ->andFilterwhere(['cate' => $id])
            ->orderBy(['lav_id' => SORT_ASC])
            ->all();
    }
}