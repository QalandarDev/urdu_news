<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RectorateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rectorate-index">

    <h2 style="text-align: center;color: #00A6C7"><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name_uz',
            //'name_ru',
            //'name_en',
            'position_uz',
            //'position_ru',
            //'position_en',
            //'title_uz',
            //'title_ru',
            //'title_en',
            //'address_uz',
            //'address_ru',
            //'address_en',
            //'reception_uz',
            //'reception_ru',
            //'reception_en',
            //'autobiography_uz:ntext',
            //'autobiography_ru:ntext',
            //'autobiography_en:ntext',
            //'phone',
            //'fax',
            //'email:email',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
