<?php

namespace backend\models;

use Yii;
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
 * @property string $title
 * @property string $text
 * @property string $location
 *
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz','cate','title_ru', 'title_en', 'text_uz','user_id', 'text_ru', 'text_en', 'date', 'time', 'location_uz',  'location_ru', 'location_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['count','user_id','cate'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'location_uz', 'img', 'location_ru', 'location_en'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
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
    public function beforeSave($insert){

        $this->image = UploadedFile::getInstance($this,'image');
        $path = Yii::getAlias('@public') . '/images';
        $name = time().'.'.$this->image->extension;
        if($this->image != null &&  $this->image->saveAs($path.'/'.$name)){
            $this->img = $name;
        }

        return true;

    }

    public function afterDelete(){
        $path = Yii::getAlias('@public') . '/images';
        if(file_exists(($path.'/' .$this->img)))
            unlink($path.'images/' .$this->img);
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
    public function getLocation()
    {
        $title = 'location_' . Yii::$app->language;
        return $this->$title;
    }

}
