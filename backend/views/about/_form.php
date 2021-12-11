<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
/* @var $this yii\web\View */
/* @var $model backend\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'text_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'text_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'text_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>


    <?= $form->field($model, 'cate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
