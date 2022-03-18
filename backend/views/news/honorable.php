<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dargahomiz Bitiruvchilari');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index box box-primary">

    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a("<i class='fa fa-plus'></i>".Yii::t('app', 'Add'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>



    <div class="box-body table-responsive no-padding">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'img',
                    'format'=>[
                        'image',
                        [
                            'width' => 150,
                            'class' => 'image',
                        ]
                    ],
                ],
                'title_uz',
                //'title_ru',
                //'title_en',
                //'text_uz:ntext',
                //'text_en:ntext',
                //'text_ru:ntext',
                'date',
                //'cate',

                //'count',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>

</div>
