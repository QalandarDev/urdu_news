<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadvalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dars-jadval-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'semid') ?>

    <?= $form->field($model, 'kun') ?>

    <?= $form->field($model, 'juftlik') ?>

    <?php // echo $form->field($model, 'megalka') ?>

    <?php // echo $form->field($model, 'fan') ?>

    <?php // echo $form->field($model, 'lessontype_id') ?>

    <?php // echo $form->field($model, 'gurux') ?>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
