<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Center Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="center-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'id',
            'about_uz:ntext',
            'about_ru:ntext',
            'about_en:ntext',
            'user_id',
            'date',
            'ilmiy_uz:ntext',
            'ilmiy_ru:ntext',
            'ilmiy_en:ntext',
            'aloqa_uz:ntext',
            'aloqa_ru:ntext',
            'aloqa_en:ntext',
            'grant_uz:ntext',
            'grant_ru:ntext',
            'grant_en:ntext',
            'document_uz:ntext',
            'document_ru:ntext',
            'document_en:ntext',
            'reja_uz:ntext',
            'reja_ru:ntext',
            'reja_en:ntext',
            'savol:ntext',
            'dastur:ntext',
        ],
    ]) ?>

</div>
