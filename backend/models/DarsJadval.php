<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dars_jadval".
 *
 * @property int $id
 * @property int $staff_id
 * @property int $semid
 * @property int $kun
 * @property int $juftlik
 * @property int $megalka
 * @property string $fan
 * @property int $lessontype_id 1-mar,2-amal,3-taj,4-sem
 * @property string $gurux
 */
class DarsJadval extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dars_jadval';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'semid', 'kun', 'juftlik', 'megalka', 'fan', 'lessontype_id', 'gurux', 'xona'], 'required'],
            [['semid', 'kun', 'juftlik', 'megalka','user_id', 'lessontype_id'], 'integer'],
            [['fan','staff_id','xona', 'gurux'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_id' => 'Hodim',
            'semid' => "Qaysi semestr uchun jadval kiritmoqchisiz?",
            'kun' => 'Kuni tanlang!',
            'juftlik' => 'Juftlik',
            'megalka' => 'Megalka',
			'user_id'=>'',
            'fan' => 'Fan nomi',
			'xona'=>"Dars qaysi binoda bo'lishi va xona raqami",
            'lessontype_id' => "Dars turi",
            'gurux' => 'Gurux nomi',
        ];
    }
}
