<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barchasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-create">

    <h2 style="text-align: center">Yangini qo'shish</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
