<?php

use backend\models\Events;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'E\'lonlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a("<i class='fa fa-plus'></i> " . Yii::t('app', 'Add'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'filterModel' => $searchModel,
            'dataProvider' => $dataProvider,
            // 'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                [
                    'attribute' => 'img',
                    'format' => 'html',
                    'value' => function (Events $model) {
                        return Html::img(Yii::getAlias('@home') . '/images/' . $model->img,['width'=>'100']);
                    }
                ],
                'title_uz',
                //'title_ru',
                //'title_en',
                //'text_uz:ntext',
                //'text_ru:ntext',
                //'text_en:ntext',
                'date',
                //'time',
                //'location_uz',
                //'img',

                //'location_ru',
                //'location_en',
                //'count',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>

</div>
