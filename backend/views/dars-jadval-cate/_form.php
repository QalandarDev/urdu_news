<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadval */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dars-jadval-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semid')->textInput() ?>

    <?= $form->field($model, 'kun')->textInput() ?>

    <?= $form->field($model, 'juftlik')->textInput() ?>

    <?= $form->field($model, 'megalka')->textInput() ?>

    <?= $form->field($model, 'fan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lessontype_id')->textInput() ?>

    <?= $form->field($model, 'gurux')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'xona')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
