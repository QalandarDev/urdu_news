<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Interaktive */

$this->title = Yii::t('app', 'Create Interaktive');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interaktives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interaktive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
