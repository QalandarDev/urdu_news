<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rectorate */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rectorates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rectorate-view">

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
            
            'name_uz',
            'name_ru',
            'name_en',
            'position_uz',
            'position_ru',
            'position_en',
            'title_uz',
            'title_ru',
            'title_en',
            'address_uz',
            'address_ru',
            'address_en',
            'reception_uz',
            'reception_ru',
            'reception_en',
            'autobiography_uz:ntext',
            'autobiography_ru:ntext',
            'autobiography_en:ntext',
            'phone',
            'fax',
            'email:email',
            'image',
        ],
    ]) ?>

</div>
