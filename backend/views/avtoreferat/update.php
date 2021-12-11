<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avtoreferat */

$this->title = Yii::t('app', 'Update Avtoreferat: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avtoreferats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="avtoreferat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
