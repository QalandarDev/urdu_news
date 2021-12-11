<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AvtoreferatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Avtoreferats');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('app', 'Create Avtoreferat'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title_uz',
                    'title_ru',
                    'title_en',
                    'autor_uz',
                    //'autor_ru',
                    //'autor_en',
                    //'date',
                    //'status',
                    //'file',
                    //'create_at',
                    //'update_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
    </div>

