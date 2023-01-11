<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "newcate".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_en
 * @property string $name_ru
 * @property-read string $name
 */
class NewsCategoryModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName():string
    {
        return 'newcate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules():array
    {
        return [
            [['name_uz', 'name_en', 'name_ru'], 'required'],
            [['name_uz', 'name_en', 'name_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public function attributeLabels():array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ru' => Yii::t('app', 'Name Ru'),
        ];
    }

    final public function getName(): string
    {
        return $this->{"name_" . Yii::$app->language};
    }
}
