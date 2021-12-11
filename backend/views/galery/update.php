<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Galery */

$this->title = Yii::t('app', '', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Galeries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="galery-update">

    <h2 style="text-align: center">Yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
