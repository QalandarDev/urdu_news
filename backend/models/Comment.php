<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $ip
 * @property string $pochta
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'ip', 'pochta'], 'required'],
            [['text'], 'string'],
            [['title', 'ip', 'pochta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'ip' => Yii::t('app', 'Ip'),
            'pochta' => Yii::t('app', 'Pochta'),
        ];
    }
}
