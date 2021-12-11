<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Center */

$this->title = Yii::t('app', '');
?>
<div class="center-create">

    <h2 style="text-align: center;color: #00A6C7">Yangini qo'shish</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
