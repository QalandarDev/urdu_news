<?php

namespace backend\models;

use Yii;
use yii\db\ActiveQuery;
use yii\web\UploadedFile;

/**
 * This is the model class for table "hodim".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lav_uz
 * @property string $lav_ru
 * @property string $lav_en
 * @property string $ilm_uz
 * @property string $ilm_ru
 * @property string $ilm_en
 * @property string $ilm1_uz
 * @property string $ilm1_ru
 * @property string $ilm1_en
 * @property string $tel
 * @property string $email
 * @property string $img
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property int $cate
 * @property int $lav_id
 * @property Lavozimlar $lavozim
 * @property-read string $name
 */
class Hodim extends \yii\db\ActiveRecord
{
    public const HOMDIM_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public $image;

    public static function tableName()
    {
        return 'hodim';
    }
    /**
     * {@inheritdoc}
     */
    /**
     * Hodim::rules()
     *
     * @return
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lav_id', 'tel', 'email', 'cate'], 'required'],
            [['text_uz', 'text_ru', 'img', 'text_en', 'scholar', 'GS','Publications'], 'string'],
            [['cate', 'cat', 'lav_id'], 'integer'],
            [['name_uz', 'name_ru', 'img', 'name_en', 'ilm_uz', 'ilm_ru', 'ilm_en', 'ilm1_uz', 'ilm1_ru', 'ilm1_en', 'tel', 'email','lav_uz','lav_ru','lav_en'], 'string', 'max' => 255],
            ['email', 'email'],
               [['scholar', 'email'], 'trim'],
           [['scholar'], 'string', 'max' => 12, 'min' => 12],
            [['image'], 'image', 'extensions' => 'png, jpg, bmp', 'minWidth' => 250, 'minHeight' => 250, 'maxSize' => 200 * 1024],
	//		  [['image'], 'image', 'extensions' => 'png, jpg, bmp',  'maxSize' => 100 * 1024],
//            [['image'],'file','skipOnEmpty'=>false, 'extensions'=>'png, jpg, bmp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'F.I.O Uz'),
            'name_ru' => Yii::t('app', 'F.I.O Ru'),
            'name_en' => Yii::t('app', 'F.I.O En'),
            //    'lav_uz' => Yii::t('app', 'Lavozim Uz'),
            //    'lav_ru' => Yii::t('app', 'Lavozim Ru'),
            //    'lav_en' => Yii::t('app', 'Lavozim En'),
            'ilm_uz' => Yii::t('app', "Ilmiy yo'nalishi Uz"),
            'ilm_ru' => Yii::t('app', "Ilmiy yo'nalishi Ru"),
            'ilm_en' => Yii::t('app', "Ilmiy yo'nalishi En"),
            'ilm1_uz' => Yii::t('app', "Pedogogik yo'nalishi Uz"),
            'ilm1_ru' => Yii::t('app', "Pedogogik yo'nalishi Ru"),
            'ilm1_en' => Yii::t('app', "Pedogogik yo'nalishi EN"),
            'tel' => Yii::t('app', 'Tel'),
            'email' => Yii::t('app', 'Email'),
            'text_uz' => Yii::t('app', 'Biografiya Uz'),
            'text_ru' => Yii::t('app', 'Biografiya Ru'),
            'text_en' => Yii::t('app', 'Biografiya En'),
            'image' => Yii::t('app', 'Hodimning surati'),
            'cate' => Yii::t('app', "Fakultet/Kafedra/Bo'lim/Markaz nomini tanlang"),
            'scholar' => Yii::t('app', "Google Academy"),
            'GS' => Yii::t('app', "Google Academy Publications"),
            'cat' => Yii::t('app', "Lavozim kategoriyasi"),
            'lav_id' => Yii::t('app', "Lavozimi"),
			'Publications' => Yii::t('app', "Publications"),
        ];
    }

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this, 'image');
        $path = Yii::getAlias('@uploads') . '/hodimlar/';
        $filename = time();
        if ($file !== null) {
            $filename .= '.' . $file->extension;
            if ($file->saveAs($path . $filename)) {
                $this->img = $filename;
            }

        }
        return true;
    }

    public function afterDelete()
    {
        $filePath = Yii::getAlias('@public') . '/hodimlar/';
        if (file_exists(($filePath . $this->img)))
            unlink($filePath . $this->img);
        return true;

    }

    /**
     * @return Lavozimlar|ActiveQuery
     */
    public function getLavozim(): ActiveQuery
    {
        return $this->hasOne(Lavozimlar::class, ['id' => 'lav_id']);
    }
    public function getName():string
    {
        return $this->{'name_' . Yii::$app->language};
    }
}
