<?php

namespace backend\models;

use Yii;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "avtoreferat".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $autor_uz
 * @property string $autor_ru
 * @property string $autor_en
 * @property string $date
 * @property int $status
 * @property string $file
 * @property int $create_at
 * @property int $update_at
 */
class Avtoreferat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avtoreferat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'autor_uz', 'autor_ru', 'autor_en', 'date', 'status', 'file', 'create_at', 'update_at'], 'required'],
            [['date'], 'safe'],
            [['status', 'create_at', 'update_at'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'autor_uz', 'autor_ru', 'autor_en'], 'string', 'max' => 255],
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
            'autor_uz' => Yii::t('app', 'Autor Uz'),
            'autor_ru' => Yii::t('app', 'Autor Ru'),
            'autor_en' => Yii::t('app', 'Autor En'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
            'file' => Yii::t('app', 'File'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
        ];
    }

    public function UploadFile():bool
    {
        $file = UploadedFile::getInstance($this, 'file');
        $file_url = uniqid('', true) . '.' . $file->extension;
        $path_up = Yii::getAlias('@public/').'uploads/avtoreferat/';
        $file->saveAs($path_up . '/' . $file_url);
        $this->file = $file_url;
        return true;
    }
}
