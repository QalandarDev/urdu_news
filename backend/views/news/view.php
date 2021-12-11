<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */


$this->title = StringHelper::truncate($model->title_uz,150);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view box box-primary">
    <div class="box-header">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [

                'title_uz',
                'title_ru',
                'title_en',
                'text_uz:ntext',
                'text_en:ntext',
                'text_ru:ntext',
                'date',
                'cate',
                [
                    'attribute' => 'img',
                    'value' => $model->img,
                    'format' => ['image', ['width' => '500', 'height' => '400']],
                ],

            ],
        ]) ?>
    </div>
</div>
