<?php

namespace common\models;

use frontend\models\Page;
use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "all_cate".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property-read ActiveQuery|Page $page
 * @property string $name_en
 */
class PageCategoryModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName():string
    {
        return 'all_cate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules():array
    {
        return [
            [['name_uz', 'name_ru', 'name_en'], 'required'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
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
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
        ];
    }

    /**
     * @return ActiveQuery|Page
     */
    final public function getPage():ActiveQuery|Page
    {
        return $this->hasMany(Page::class, ['cate' => 'id']);
    }
}
