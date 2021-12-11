<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lavozimlar".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $cat
 */
class Lavozimlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lavozimlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat'], 'required'],
            [['cat'], 'string'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
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
            'cat' => 'Cat',
        ];
    }
}
