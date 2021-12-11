<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Center;
use backend\models\Hodim;
/**
 * ContactForm is the model behind the contact form.
 */
class Search extends Model
{
    public $name;
    public $dep;
	public $filters;
   


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'dep'], 'string'],
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' =>Yii::t('app','Name of employee'),
			'dep' =>Yii::t('app','Departments'),
			'filters'=>'',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function mydep()
    {
         $query = new \yii\db\Query;
        $query->select('id, name_'.Yii::$app->language.' AS text')
            ->from('center');
           // ->limit(20);
		
            $datas = $query->all(); 
                $data= \yii\helpers\ArrayHelper::map($datas,'id' ,'text');
          //      	$data['0']= Yii::t('app','All departments');
         //   foreach($datas as $row) { $data[$row['id']]= $row['text'];};
            return  $data;
    }
	
	 public function mylavozim()
    {
         $query = new \yii\db\Query;
        $query->select('id, name_'.Yii::$app->language.' AS text')
            ->from('lavozimlar');
           // ->limit(20);
	            $datas = $query->all(); 
            $data= \yii\helpers\ArrayHelper::map($datas,'id' ,'text');
          //  	$data['0']= Yii::t('app','-- Tanlang --');
           // foreach($datas as $row) { $data[$row['id']]= $row['text'];};
            return  $data;
    }
    
    public function mysearch($params)
    {
        
       $query = new \yii\db\Query;
        $query->select('*')
           ->from('hodim')
		    ->where(['like', 'name_'.Yii::$app->language, '%'.$params['name_uz'].'%',false]);
         
            $datas = $query->all(); 
            $data= \yii\helpers\ArrayHelper::map($datas,'id' ,'text');
          //  foreach($datas as $row) { $data[$row['id']]= $row['text'];};
            return  $data;
     // return $query;
    }
    
    
}

