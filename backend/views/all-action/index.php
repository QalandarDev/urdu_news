<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AllActionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "";
?>
<div class="all-action-index">

    <h2 style="color: #00a7d0;text-align: center">Barcha faoliyat turlari</h2>

    <p>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
            'title_uz',
//            'title_ru',
//            'title_en',
//            'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',
            //'date',
//            'cate',
            [
                'attribute' => 'cate',
                'value' => 'cate0.name_uz'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
