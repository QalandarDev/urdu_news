<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "rectorate".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $position_uz
 * @property string $position_ru
 * @property string $position_en
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address_en
 * @property string $reception_uz
 * @property string $reception_ru
 * @property string $reception_en
 * @property string $autobiography_uz
 * @property string $autobiography_ru
 * @property string $autobiography_en
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $image
 */
class Rectorate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $images;
    public static function tableName()
    {
        return 'rectorate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'position_ru', 'position_en'], 'required'],
            [['id'], 'integer'],
            [['autobiography_uz', 'autobiography_ru', 'autobiography_en'], 'string'],
            [['name_uz', 'name_ru', 'name_en', 'phone', 'fax'], 'string', 'max' => 50],
            [['position_uz', 'position_ru', 'position_en', 'title_uz', 'title_ru', 'title_en', 'reception_uz', 'reception_ru', 'reception_en', 'email'], 'string', 'max' => 100],
            [['address_uz', 'address_ru', 'address_en'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 250],
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
            'position_uz' => Yii::t('app', 'Position Uz'),
            'position_ru' => Yii::t('app', 'Position Ru'),
            'position_en' => Yii::t('app', 'Position En'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_en' => Yii::t('app', 'Address En'),
            'reception_uz' => Yii::t('app', 'Reception Uz'),
            'reception_ru' => Yii::t('app', 'Reception Ru'),
            'reception_en' => Yii::t('app', 'Reception En'),
            'autobiography_uz' => Yii::t('app', 'Autobiography Uz'),
            'autobiography_ru' => Yii::t('app', 'Autobiography Ru'),
            'autobiography_en' => Yii::t('app', 'Autobiography En'),
            'phone' => Yii::t('app', 'Phone'),
            'fax' => Yii::t('app', 'Fax'),
            'email' => Yii::t('app', 'Email'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
    public function beforeSave($insert){

        $this->images = UploadedFile::getInstance($this,'images');
		 $path = Yii::getAlias('@public/') . 'img/';
        if($this->images != null &&  $this->images->saveAs($path . $this->images->baseName . '.' . $this->images->extension)){
            $this->image = $this->images->baseName . '.' . $this->images->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('images/' .$this->images)))
            unlink('images/' .$this->images);
        return true;
    }
}
