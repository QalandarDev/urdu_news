<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AllAction */

$this->title = Yii::t('app', '', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'All Actions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="all-action-update">

    <h2 style="text-align: center">Ma'lumotni yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
