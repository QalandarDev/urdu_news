<?php

namespace common\models;

use frontend\models\NewsCategory;
use Yii;
use yii\db\ActiveQuery;
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
 * @property-read Newcate $category
 * @property-read User $user
 * @property-read string $short
 */
class NewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'user_id', 'text_uz', 'text_en', 'text_ru', 'date', 'cate', 'img'], 'required'],
            [['text_uz', 'text_en', 'text_ru'], 'string'],
            [['date'], 'safe'],
            [['cate', 'count', 'user_id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'img'], 'string', 'max' => 400],
//            ['img', 'file', 'extensions' => 'jpg', 'maxSize' => 1024*1000, 'tooBig' => 'Limit is 1 MB' ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
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

    final public function getTitle(): string
    {
        return $this->{"title_" . Yii::$app->language};
    }

    final public function getText(): string
    {
        return $this->{"text_" . Yii::$app->language};
    }

    final public function getUser(): ActiveQuery|User
    {
        return @$this->hasOne(User::class, ['user' => 'user_id']);
    }

    final public function getShort(): string
    {
        return mb_substr(strip_tags($this->text), 0, 200);
    }

    final public function getCategory()
    {
        return $this->hasOne(NewsCategory::class, ['id' => 'cate']);
    }
}
