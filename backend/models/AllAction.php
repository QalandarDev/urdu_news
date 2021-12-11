<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "all_action".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string $date
 * @property int $cate
 */
class AllAction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'all_action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'date', 'cate'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['cate','status'], 'integer'],
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
            'date' => Yii::t('app', 'Date'),
            'cate' => Yii::t('app', 'Cate'),
        ];
    }
    public function getTitle()
    {
        $title = "title_" . Yii::$app->language;
        return $this->$title;
    }

    public function getText()
    {
        $text = "text_" . Yii::$app->language;
        return $this->$text;
    }
    public function getCate0(){
        return $this->hasOne(AllCate::className(),['id'=>'cate']);
    }
}
