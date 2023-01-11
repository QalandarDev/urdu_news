<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string $date
 * @property string $time
 * @property string $location_uz
 * @property string $img
 * @property string $location_ru
 * @property string $location_en
 * @property int $count
 * @property int $user_id
 * @property int $cate
 * @property-read string $title
 * @property-read string $text
 * @property-read string $location
 *
 */
class EventsModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName(): string
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    final public function rules(): array
    {
        return [
            [['title_uz', 'cate', 'title_ru', 'title_en', 'text_uz', 'user_id', 'text_ru', 'text_en', 'date', 'time', 'location_uz', 'location_ru', 'location_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['count', 'user_id', 'cate'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'location_uz', 'img', 'location_ru', 'location_en'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Sarlavha Uz'),
            'title_ru' => Yii::t('app', 'Sarlavha Ru'),
            'title_en' => Yii::t('app', 'Sarlavha En'),
            'text_uz' => Yii::t('app', 'Matn Uz'),
            'text_ru' => Yii::t('app', 'Matn Ru'),
            'text_en' => Yii::t('app', 'Matn En'),
            'date' => Yii::t('app', 'Sana'),
            'time' => Yii::t('app', 'Vaqt'),
            'location_uz' => Yii::t('app', 'Manzil Uz'),
            'image' => Yii::t('app', 'Asosiy surat'),
            'img' => Yii::t('app', 'Asosiy surat'),
            'location_ru' => Yii::t('app', 'Manzil Ru'),
            'location_en' => Yii::t('app', 'Manzil En'),
            'count' => Yii::t('app', 'Count'),
            'cate' => Yii::t('app', "E'lon turi"),
            'user_id' => Yii::t('app', 'Bo\'lim/Fakultet/Kafedra/Markaz'),
        ];
    }

    final public function getTitle(): string
    {
        return $this->{"title_" . Yii::$app->language};
    }

    final public function getText(): string
    {
        return $this->{"text_" . Yii::$app->language};
    }

    final public function getLocation(): string
    {
        return $this->{"location_" . Yii::$app->language};
    }
}
