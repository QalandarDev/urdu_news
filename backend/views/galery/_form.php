<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Galery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'image')->fileInput(['maxlength' => true, 'required'=>$model->isNewRecord]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'type')->dropDownList([1 => 'Campus', 2 => 'Globalization', 3 => 'Student Life']) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
