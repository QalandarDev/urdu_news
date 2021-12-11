<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\Hodim1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hodim1s');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hodim1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hodim1'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'lav_uz',
            //'lav_ru',
            //'lav_en',
            //'lav',
            //'ilm_uz',
            //'ilm_ru',
            //'ilm_en',
            //'ilm1_uz',
            //'ilm1_ru',
            //'ilm1_en',
            //'tel',
            //'email:email',
            //'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',
            //'cate',
            //'img',
            //'scholar:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
