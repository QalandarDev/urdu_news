<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Galery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galery-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
