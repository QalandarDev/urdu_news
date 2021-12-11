<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "all_cate".
 *
 * @property int $id
 * @property string $name
 * @property int $year
 */
class Programm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'year'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'year' => Yii::t('app', 'Year'),
        ];
    }
}
