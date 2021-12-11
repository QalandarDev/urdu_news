<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h2 style="text-align: center;color: rgba(33, 108, 170, 0.52)">Barchasi</h2>

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

        
            'title_uz',
//            'title_ru',
//            'title_en',
//            'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',
            //'cate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
