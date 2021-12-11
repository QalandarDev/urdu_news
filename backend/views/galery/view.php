<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Galery */
/* @var $home string */

$this->title ="";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Galeries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="galery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Yangilash'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', "O'chirish"), ['delete', 'id' => $model->id], [
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
            'type',
            [
                'attribute'=>'img',
                'value'=>$home.'/images/gallery/' . $model->img,
                'format' => ['image',['width'=>'500','height'=>'400']],
            ],
        ],
    ]) ?>

</div>
