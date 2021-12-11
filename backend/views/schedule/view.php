<?php


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Center */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Centers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="center-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'image',
            'user_id',
        ],
    ]) ?>

</div>
