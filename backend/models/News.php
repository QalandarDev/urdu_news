<?php

namespace backend\models;

use himiklab\sitemap\behaviors\SitemapBehavior;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title
 * @property string $text
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_uz
 * @property string $text_en
 * @property string $text_ru
 * @property string $date
 * @property int $cate
 * @property string $img
 * @property int $count
 * @property int $user_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    public function behaviors()
    {
        return [
            'sitemap' => [
                'class' => SitemapBehavior::class,
                'scope' => function ($model) {
                    /** @var  self $model */
                    $model->select(['id', 'date']);
                    $model->orderBy(['id' => SORT_DESC]);
                },
                'dataClosure' => function ($model) {
                    /** @var self $model */
                    return [
                        'loc' => Url::to(['/news/index', 'id' => $model->id], true),
                        'lastmod' => strtotime($model->date),
                        'changefreq' => SitemapBehavior::CHANGEFREQ_HOURLY,
                        'priority' => 0.8
                    ];
                }
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public $image;

    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en','user_id', 'text_uz', 'text_en', 'text_ru', 'date', 'cate','img'], 'required'],
            [['text_uz', 'text_en', 'text_ru'], 'string'],
            [['date'], 'safe'],
            [['cate', 'count','user_id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'img'], 'string', 'max' => 400],
            ['img', 'file', 'extensions' => 'jpg', 'maxSize' => 1024*1000, 'tooBig' => 'Limit is 1 MB' ]
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
            'text_en' => Yii::t('app', 'Matn En'),
            'text_ru' => Yii::t('app', 'Matn Ru'),
            'date' => Yii::t('app', 'Sana'),
            'cate' => Yii::t('app', 'Yangilik turi'),
            'image' => Yii::t('app', 'Asosiy surat'),
            'count' => Yii::t('app', 'Count'),
            'user_id' => Yii::t('app', "Bo'lim/Fakultet/Kafedra/Markaz"),
            'img' => Yii::t('app', 'Asosiy surat'),

        ];
    }
//    public function beforeSave($insert){
//
//        $this->image = UploadedFile::getInstance($this,'image');
//        $path = Yii::getAlias('@public') . '/images';
//        $name = time().'.'.$this->image->extension;
//        if($this->image != null &&  $this->image->saveAs($path.'/'.$name)){
//            $this->img = $name;
//        }
//
//        return true;
//
//    }

//    public function afterDelete(){
//        $path = Yii::getAlias('@public') . '/images';
//        if(file_exists(($path.'/' .$this->img)))
//            unlink($path.'images/' .$this->img);
//        return true;
//    }

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
    public function getUser(){
        return $this->hasOne(User::class,['id'=>'user_id']);
    }
}
