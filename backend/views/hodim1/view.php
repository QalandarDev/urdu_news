<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim1 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hodim1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hodim1-view">

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
            'name_uz',
            'name_ru',
            'name_en',
            'lav_uz',
            'lav_ru',
            'lav_en',
            'lav',
            'ilm_uz',
            'ilm_ru',
            'ilm_en',
            'ilm1_uz',
            'ilm1_ru',
            'ilm1_en',
            'tel',
            'email:email',
            'text_uz:ntext',
            'text_ru:ntext',
            'text_en:ntext',
            'cate',
            'img',
            'scholar:ntext',
        ],
    ]) ?>

</div>
