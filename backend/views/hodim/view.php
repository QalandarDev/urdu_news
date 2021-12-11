<?php

use backend\models\Hodim;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */

$this->title = $model->name_uz;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lavozimlars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hodim-view box box-primary">

    <div class="box-header">
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
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

            'name_uz',
            'name_ru',
            'name_en',
            [
                'header' => 'Lavozim',
                'attribute' => 'lav_id',
                'value' => function (Hodim $model) {
                    return $model->lavozim->name_uz;
                }
            ],
            'ilm_uz',
            'ilm_ru',
            'ilm_en',
            'ilm1_uz',
            'ilm1_ru',
            'ilm1_en',
            'tel',
            'email:email',
            'text_uz:html',
            'text_ru:html',
            'text_en:html',
            'cate',
        ],
    ]) ?>
    </div>
</div>
