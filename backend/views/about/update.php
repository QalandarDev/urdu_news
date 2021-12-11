<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\About */

$this->title = Yii::t('app', '', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abouts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="about-update">

    <h2 style="color: rgba(33, 108, 170, 0.52);text-align: center">Yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
