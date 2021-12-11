<?php

namespace backend\models;

use Yii;
use yii\helpers\VarDumper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "galery".
 *
 * @property int $id
 * @property string $img
 * @property string $image_cat
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string $title
 * @property string $text
 */
class Galery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;

    public static function tableName()
    {
        return 'galery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en','type'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['image_cat'], 'string'],
            [['img', 'title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'img' => Yii::t('app', 'Fotosurat'),
            'image' => Yii::t('app', 'Fotosuratni tanlang...'),
            'title_uz' => Yii::t('app', 'Sarlovha Uz'),
            'title_ru' => Yii::t('app', 'Sarlovha Ru'),
            'title_en' => Yii::t('app', 'Sarlovha En'),
            'text_uz' => Yii::t('app', "To'liq matn Uz"),
            'text_ru' => Yii::t('app', "To'liq matn Ru"),
            'text_en' => Yii::t('app', "To'liq matn En"),
            'type' => Yii::t('app', "Fotosurat Turi"),
            'image_cat' => Yii::t('app', "Qirqilgan fotosurat"),
        ];
    }

    public function beforeSave($insert)
    {

        $file = UploadedFile::getInstance($this, 'image');
        $path = Yii::getAlias('@public/images/gallery');
        $name = 'photo_' . date('Y-m-d') . Yii::$app->security->generateRandomString(20) . '.' . $file->extension;

        if ($file != null && $file->saveAs($path . '/' . $name)) {
            $this->img = $name;

        }
        $thumb_name = 'thumb_' . date('Y-m-d') . Yii::$app->security->generateRandomString(20) . '.' . $file->extension;
        Image::thumbnail($path.'/'.$name,400,300)->save($path.'/thumb/'.$thumb_name);
        $this->image_cat = $thumb_name;
        return true && parent::beforeSave($insert);

    }

    public function afterDelete()
    {
        $path = Yii::getAlias('@public/images/gallery');
        if (file_exists(($path . $this->img)))
            unlink($path . $this->img);
        return true;
    }

    public function getTitle()
    {
        $title = 'title_' . Yii::$app->language;
        return $this->$title;
    }
    public function getText()
    {
        $title = 'text_' . Yii::$app->language;
        return $this->$title;
    }

}
