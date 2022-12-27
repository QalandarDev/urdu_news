<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "center".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $image
 * @property string $fak_id
 * @property int $user_id
 * @property int $cate
 * @property-read string $name
 */
class Center extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'center';
    }

    /**
     * {@inheritdoc}
     */
    public $img;

    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['user_id', 'fak_id', 'cate'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 200],
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
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'img' => Yii::t('app', 'Logotip'),
            'cate' => Yii::t('app', 'Cate'),
            'image' => Yii::t('app', 'Image'),
            'fak_id' => Yii::t('app', 'Fak_id'),
            'user_id' => Yii::t('app', ''),
        ];
    }

    public function beforeSave($insert)
    {

        $path = Yii::getAlias('@public') . '/images/';
        $this->img = UploadedFile::getInstance($this, 'img');
        if ($this->img != null && $this->img->saveAs($path . $this->img->baseName . '.' . $this->img->extension)) {
            $this->image = $this->img->baseName . '.' . $this->img->extension;
        }

        return true;

    }

    public function afterDelete()
    {
        $path = Yii::getAlias('@public') . '/images/';
        if (file_exists(($path . $this->image)))
            unlink($path . $this->image);
        return true;
    }

    public function getUser()
    {
        return $this->hasMany(User::className(), ['user' => 'id']);
    }

    public function getName()
    {
        return $this->{'name_' . Yii::$app->language};
    }
}
