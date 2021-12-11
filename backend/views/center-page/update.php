<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */

$this->title = Yii::t('app', '', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Center Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="center-page-update">

    <h2 style="text-align:center">Ma'lumotlarni yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
