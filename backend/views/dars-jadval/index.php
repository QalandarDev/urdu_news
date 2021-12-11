<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DarsJadvalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="dars-jadval-index">

    <h3 style="text-align: center;color: #0d6aad"><b>Kafedra o'qituvchilarining dars jadvallar to'plami</b></h3>

    <p>
        <?= Html::a("Jadval kiritish", ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            //'staff_id',
            [
                'attribute'=>'staff_id',
                'label'=>'Hodimning FIO',
                'format'=>'text', // Возможные варианты: raw, html
                'content'=>function($data){
                $ss = \backend\models\Hodim::find()->where(['id'=>$data['staff_id']])->one();
                    return $ss['name_uz'];
                },

            ],
            //'semid',
            'fan',
            //'lessontype_id',
            'gurux',
            'kun',
			'juftlik',
			[
				'attribute' => 'megalka',
				'value' => function($data){
					if($data['megalka']==0) return "To'liq";
					else if($data['megalka']==1) return "Toq hafta";
					else return "Juft hafta";
				}
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
