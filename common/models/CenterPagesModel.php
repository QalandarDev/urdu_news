<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "center_page".
 *
 * @property int $id
 * @property string $position_uz
 * @property string $position_ru
 * @property string $position_en
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $email
 * @property string $phone
 * @property string $reception_uz
 * @property string $reception_ru
 * @property string $reception_en
 * @property string $about_uz
 * @property string $about_ru
 * @property string $about_en
 * @property int $user_id
 * @property string $date
 * @property string $ilmiy_uz
 * @property string $ilmiy_ru
 * @property string $ilmiy_en
 * @property string $aloqa_uz
 * @property string $aloqa_ru
 * @property string $aloqa_en
 * @property string $grant_uz
 * @property string $grant_ru
 * @property string $grant_en
 * @property string $img
 * @property CenterModel $center
 * @property-read string $about
 * @property-read string $communication
 * @property-read string $scientific
 * @property-read string $ilmiy
 * @property-read string $grants
 */
class CenterPagesModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName(): string
    {
        return 'center_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['about_uz', 'about_ru', 'about_en', 'user_id', 'date'], 'required'],
            [['about_uz', 'savol', 'dastur', 'about_ru', 'about_en', 'document_uz', 'document_ru', 'document_en', 'ilmiy_uz', 'ilmiy_ru', 'ilmiy_en', 'aloqa_uz', 'aloqa_ru', 'aloqa_en', 'grant_uz', 'grant_ru', 'grant_en'], 'string'],
            [['user_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public function attributeLabels(): array
    {

        return [
            'id' => Yii::t('app', 'ID'),
            'about_uz' => Yii::t('app', "Fakultet ma'lumotlari Uz"),
            'about_ru' => Yii::t('app', 'Fakultet ma\'lumotlari Ru'),
            'about_en' => Yii::t('app', 'Fakultet ma\'lumotlari En'),
            'user_id' => Yii::t('app', 'Fakultet'),
            'date' => Yii::t('app', 'Sana'),
            'ilmiy_uz' => Yii::t('app', 'Fakultet kengashi Uz'),
            'ilmiy_ru' => Yii::t('app', 'Fakultet kengashi Ru'),
            'ilmiy_en' => Yii::t('app', 'Fakultet kengashi En'),
            'aloqa_uz' => Yii::t('app', 'Fakultet aloqalari Uz'),
            'aloqa_ru' => Yii::t('app', 'Fakultet aloqalari Ru'),
            'aloqa_en' => Yii::t('app', 'Fakultet aloqalari En'),
            'grant_uz' => Yii::t('app', 'Fakultet grantlari Uz'),
            'grant_ru' => Yii::t('app', 'Fakultet grantlari Ru'),
            'grant_en' => Yii::t('app', 'Fakultet grantlari En'),
            'document_uz' => Yii::t('app', 'Fakultet normativ hujjatlari Uz'),
            'document_ru' => Yii::t('app', 'Fakultet normativ hujjatlari Ru'),
            'document_en' => Yii::t('app', 'Fakultet normativ hujjatlari En'),
        ];
    }

    /**
     * @return ActiveQuery|CenterModel|null
     */
    public function getCenter(): ActiveQuery|CenterModel|null
    {
        return $this->hasOne(CenterModel::class, ['user_id' => 'user_id']);
    }

    public function getAbout(): string
    {
        return $this->{'about_' . Yii::$app->language};
    }

    final public function getScientific(): string
    {
        return $this->{'ilmiy_' . Yii::$app->language};
    }

    final public function getCommunication(): string
    {
        return $this->{'aloqa_' . Yii::$app->language};
    }

    final public function getGrants(): string
    {
        return $this->{'grant_' . Yii::$app->language};
    }
}
