<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "lavozimlar".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $cat
 * @property-read string $name
 */
class PositionModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    final public static function tableName(): string
    {
        return 'lavozimlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['cat'], 'required'],
            [['cat'], 'string'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    final public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'cat' => 'Cat',
        ];
    }

    final public function getName():string
    {
        return $this->{'name_' . Yii::$app->language};
    }
}
