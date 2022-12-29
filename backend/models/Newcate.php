<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "newcate".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_en
 * @property string $name_ru
 * @property-read string $name
 */
class Newcate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newcate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_en', 'name_ru'], 'required'],
            [['name_uz', 'name_en', 'name_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ru' => Yii::t('app', 'Name Ru'),
        ];
    }


    public function Cates($id)
    {
        $cat = Newcate::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();


        return $cat;
    }

    public function getName(): string
    {
        return $this->{"name_" . Yii::$app->language};
    }
}
