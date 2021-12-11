<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadval */

$this->title = '';
?>
<div class="dars-jadval-create">

    <h3 style="text-align: center;color: #0d6aad"><b>Dars jadvalini to'ldirish</b></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
