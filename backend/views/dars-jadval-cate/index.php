<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DarsJadvalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dars Jadvals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-jadval-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Dars Jadval'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_id',
            'semid',
            'kun',
            'juftlik',
            //'megalka',
            //'fan',
            //'lessontype_id',
            //'gurux',
            //'user_id',
            //'xona',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
