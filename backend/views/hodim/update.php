<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */

$this->title = Yii::t('app', ' ', [
    'name' => $model->id,
]);
?>
<div class="hodim-update">

    <h2 style="text-align: center">Malumotlarni yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
