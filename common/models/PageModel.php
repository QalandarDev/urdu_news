<?php

namespace common\models;

use common\components\NewBehavior;
use Yii;
use yii\db\ActiveRecord;

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
 * @property-read string $text
 * @property-read string $title
 */
class PageModel extends ActiveRecord
{

    final public function behaviors(): array
    {
        /* newBehavior*/
        return [
            NewBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public static function tableName():string
    {
        return 'all_action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules():array
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'date', 'cate'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['cate', 'status'], 'integer'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public function attributeLabels():array
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

    final public function getTitle(): string
    {
        return $this->{'title_' . Yii::$app->language};
    }

    final public function getText(): string
    {
        return $this->{'text_' . Yii::$app->language};
    }
}
