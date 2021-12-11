<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barchasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="events-view">

    <h2 style="text-align: center"></h2>

    <p><?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'title_uz',
            'title_ru',
            'title_en',
            'text_uz:ntext',
            'text_ru:ntext',
            'text_en:ntext',
            'date',
            'time',
            'location_uz',
            'location_ru',
            'location_en',
            [
                'attribute'=>'img',
                'value'=>('/backend/web/images/' . $model->img),
                'format' => ['image',['width'=>'500','height'=>'400']],
            ],
        ],
    ]) ?>

</div>
