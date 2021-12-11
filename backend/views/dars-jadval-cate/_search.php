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
        'options' => [
            'data-pjax' => 1
        ],
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

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'xona') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
