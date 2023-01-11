<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $description
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property-read string $text
 * @property-read string $title
 */
class AboutModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName(): string
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
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
    final public function attributeLabels(): array
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

    final public function getTitle(): string
    {
        return $this->{'title_' . Yii::$app->language};
    }

    final public function getText(): string
    {
        return $this->{'text_' . Yii::$app->language};
    }
}
