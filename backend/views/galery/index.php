<?php

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GalerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Galery;
$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galery-index">

    <h2 style="text-align: center">Barcha fotolavhalar</h2>

    <p>
        <?= Html::a("<i class='fa fa-plus'></i> ".Yii::t('app', 'Add'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'header' => 'Img',
                'attribute' => 'img',
                'format' => 'html',
                'value' => function (Galery $model) {
                    return Html::img(Yii::$app->request->getBaseUrl().'/images/'.$model->img,['width'=>'200']);
                }
            ],
            'title_uz',
//            'title_ru',
//            'title_en',
            //'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
