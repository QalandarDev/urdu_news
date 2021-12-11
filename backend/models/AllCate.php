<?php

namespace backend\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "all_cate".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property AllAction $allAction
 */
class AllCate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'all_cate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en'], 'required'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return AllAction[]
     */
    public function getAllAction()
    {
        return $this->hasMany(AllAction::class, ['cate' => 'id']);
    }
}
