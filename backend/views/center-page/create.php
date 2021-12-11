<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', ''), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-page-create">

    <h2 style="text-align: center">Yangi ma'lumot qo'shish</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
