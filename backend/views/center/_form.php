<?php

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Center */
/* @var $form yii\widgets\ActiveForm */

$center = \backend\models\Center::find()->where(['cate'=>1])->all();
$data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
$cateal = \backend\models\CenterCate::find()->all();
$cate= \yii\helpers\ArrayHelper::map($cateal,'id' ,'name_uz');
?>

<div class="center-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>




    <?php
    echo $form->field($model, 'fak_id')->widget(\kartik\select2\Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Tanlang ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'user_id')->hiddenInput() ?>

    <?php
    echo $form->field($model, 'cate')->widget(\kartik\select2\Select2::classname(), [
        'data' => $cate,
        'options' => ['placeholder' => 'Tanlang ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?= $form->field($model, 'image')->widget(InputFile::class, [
        'language' => 'ru',
        'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options' => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-default'],
        'multiple' => false       // возможность выбора нескольких файлов
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
