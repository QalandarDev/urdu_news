<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CenterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-index">

    <h2 style="text-align: center;color: #00A6C7">Barcha Ma'lumotlar</h2>

    <p>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'name_uz',
//            'name_ru',
//            'name_en',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'image',
            //'user_id',
            //'cate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
