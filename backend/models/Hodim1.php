<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hodim1".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lav_uz
 * @property string $lav_ru
 * @property string $lav_en
 * @property int|null $lav
 * @property string|null $ilm_uz
 * @property string|null $ilm_ru
 * @property string|null $ilm_en
 * @property string|null $ilm1_uz
 * @property string|null $ilm1_ru
 * @property string|null $ilm1_en
 * @property string $tel
 * @property string $email
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property int $cate
 * @property string $img
 * @property string|null $scholar
 */
class Hodim1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hodim1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lav_uz', 'lav_ru', 'lav_en', 'tel', 'email', 'cate', 'img'], 'required'],
            [['lav', 'cate'], 'integer'],
            [['text_uz', 'text_ru', 'text_en', 'scholar'], 'string'],
            [['name_uz', 'name_ru', 'name_en', 'lav_uz', 'lav_ru', 'lav_en', 'ilm_uz', 'ilm_ru', 'ilm_en', 'ilm1_uz', 'ilm1_ru', 'ilm1_en', 'tel', 'email', 'img'], 'string', 'max' => 255],
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
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'lav_uz' => Yii::t('app', 'Lav Uz'),
            'lav_ru' => Yii::t('app', 'Lav Ru'),
            'lav_en' => Yii::t('app', 'Lav En'),
            'lav' => Yii::t('app', 'Lav'),
            'ilm_uz' => Yii::t('app', 'Ilm Uz'),
            'ilm_ru' => Yii::t('app', 'Ilm Ru'),
            'ilm_en' => Yii::t('app', 'Ilm En'),
            'ilm1_uz' => Yii::t('app', 'Ilm1 Uz'),
            'ilm1_ru' => Yii::t('app', 'Ilm1 Ru'),
            'ilm1_en' => Yii::t('app', 'Ilm1 En'),
            'tel' => Yii::t('app', 'Tel'),
            'email' => Yii::t('app', 'Email'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_en' => Yii::t('app', 'Text En'),
            'cate' => Yii::t('app', 'Cate'),
            'img' => Yii::t('app', 'Img'),
            'scholar' => Yii::t('app', 'Scholar'),
        ];
    }
}
