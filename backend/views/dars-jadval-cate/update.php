<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadval */

$this->title = Yii::t('app', 'Update Dars Jadval: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dars Jadvals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dars-jadval-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
