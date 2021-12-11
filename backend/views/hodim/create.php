<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */

$this->title = Yii::t('app', '');
?>
<div class="hodim-create">

    <h2 style="text-align: center">Ma'lumot qo'shish</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
