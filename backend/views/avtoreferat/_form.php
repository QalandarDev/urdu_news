<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Avtoreferat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avtoreferat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'status')->dropDownList(['0' => 'DeActive','1'=>'Active'],['prompt'=>'--Select--']) ?>

    <?= $form->field($model, 'file')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
