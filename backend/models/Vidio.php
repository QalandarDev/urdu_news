<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vidio".
 *
 * @property int $id
 * @property string $url
 */
class Vidio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vidio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
        ];
    }
}
