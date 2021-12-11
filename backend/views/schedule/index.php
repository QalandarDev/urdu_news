<?php


use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Admin');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-index">

    <h2 style="text-align: center;color: #00A6C7">Barcha Ma'lumotlar</h2>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name_uz',
//            'name_ru',
//            'name_en',
            'content_uz',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'image',
            //'user_id',
            //'cate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
