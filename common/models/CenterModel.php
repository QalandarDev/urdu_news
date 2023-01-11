<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
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
 * @property-read ActiveQuery|User $user
 * @property-read string $name
 */
class CenterModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName(): string
    {
        return 'center';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
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
    final public function attributeLabels(): array
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

    final public function getUser(): ActiveQuery|User
    {
        return $this->hasMany(User::class, ['user' => 'id']);
    }

    final public function getName(): string
    {
        return $this->{"name_" . Yii::$app->language};
    }

}
