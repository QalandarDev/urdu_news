<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AllAction */
/* @var $form yii\widgets\ActiveForm */
$cate = \backend\models\AllCate::find()->all();
$data = \yii\helpers\ArrayHelper::map($cate, 'id', 'name_uz');
?>

<div class="all-action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'text_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

    ]);

    echo $form->field($model, 'text_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

    ]);
    echo $form->field($model, 'text_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

    ]);
    ?>

    <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'cate')->dropDownList(
        $data,
        ['prompt' => 'Select...']
    ); ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
            '0' => 'DeActive',
            '1' => 'Active'
        ],
        ['prompt' => 'Select...']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
