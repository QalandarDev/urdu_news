<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mandat".
 *
 * @property int $id
 * @property string|null $EN
 * @property string|null $LN
 * @property int|null $MVDir
 * @property string|null $MN
 * @property string|null $AccName
 * @property float|null $NBall1
 * @property float|null $NBall2
 * @property int|null $NTvorec
 * @property float|null $NLgotBall
 * @property string|null $f1
 * @property string|null $f2
 * @property float|null $NComBall
 * @property float|null $NumberId
 * @property string|null $FISH
 * @property int|null $SCode
 */
class Mandat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mandat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MVDir', 'NTvorec', 'SCode'], 'integer'],
            [['NBall1', 'NBall2', 'NLgotBall', 'NComBall'], 'number'],
            [['EN'], 'string', 'max' => 10],
            [['LN'], 'string', 'max' => 7],
            [['MN'], 'string', 'max' => 97],
            [['AccName'], 'string', 'max' => 108],
            [['f1'], 'string', 'max' => 18],
            [['f2'], 'string', 'max' => 22],
            [['FISH'], 'string', 'max' => 46],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'EN' => 'Ta\'lim shakli',
            'LN' => 'Ta\'lim tili',
            'MVDir' => 'Mv Dir',
            'MN' => 'Yo\'nalishi',
            'AccName' => 'Acc Name',
            'NBall1' => 'N Ball1',
            'NBall2' => 'N Ball2',
            'NTvorec' => 'N Tvorec',
            'NLgotBall' => 'N Lgot Ball',
            'f1' => '1- Fan',
            'f2' => 'F2',
            'NComBall' => 'N Com Ball',
            'FISH' => 'Fish',
            'SCode' => 'S Code',
        ];
    }


}
