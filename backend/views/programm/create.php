<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Programm */

$this->title = Yii::t('app', 'Create Programm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
