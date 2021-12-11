<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = Yii::t('app', "");
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barchasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h2 style="text-align: center">Yangilik qo'shish</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
