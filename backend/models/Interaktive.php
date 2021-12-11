<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "interaktive".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $url
 */
class Interaktive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'interaktive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'url'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'url' => 'Url',
        ];
    }
}
