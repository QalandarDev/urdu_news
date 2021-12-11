<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AllAction */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'All Actions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="all-action-create">

    <h3 style="text-align: center">Yangini qo'shish</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
