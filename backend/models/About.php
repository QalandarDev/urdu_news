<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property int $cate
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'cate'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['cate'], 'integer'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_en' => Yii::t('app', 'Text En'),
            'cate' => Yii::t('app', 'Cate'),
        ];
    }
}
