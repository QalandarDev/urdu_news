<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Rectorate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rectorate-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reception_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reception_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reception_en')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'autobiography_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'autobiography_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'autobiography_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
