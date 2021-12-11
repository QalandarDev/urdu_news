<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HodimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Barcha hodimlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index box box-primary">


    <div class="box-header with-border">
        <?= Html::a(Yii::t('app', '+ Add'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'=>$searchModel,
        'layout' => "{items}\n{summary}\n{pager}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_uz',
//            'lav_uz',
            [
                'header' => 'Lavozim',
                'value' => 'lavozim.name_uz',
            ],
            //'lav_ru',
            //'lav_en',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>

</div>
