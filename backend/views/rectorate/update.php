<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rectorate */

$this->title = Yii::t('app', '', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rectorates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rectorate-update">

    <h2 style="text-align: center;color: #00A6C7">Yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
