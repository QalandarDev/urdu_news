<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CenterPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-page-index">

    <h2 style="text-align: center">Barcha Ma'lumotlar</h2>

    <p>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			           
//            'id',
 //           'position_uz',
//            'position_ru',
//            'position_en',
  //          'name_uz',
            //'name_ru',
            //'name_en',
            //'email:email',
            //'phone',
            //'reception_uz',
            //'reception_ru',
            //'reception_en',
            //'about_uz:ntext',
            //'about_ru:ntext',
            //'about_en:ntext',
            'user_id',
            'center.name_uz',
            'date',
            //'ilmiy_uz:ntext',
            //'ilmiy_ru:ntext',
            //'ilmiy_en:ntext',
            //'aloqa_uz:ntext',
            //'aloqa_ru:ntext',
            //'aloqa_en:ntext',
            //'grant_uz:ntext',
            //'grant_ru:ntext',
            //'grant_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
