<?php

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */
/* @var $form yii\widgets\ActiveForm */

$user_id=Yii::$app->getUser()->identity->user;
if(Yii::$app->getUser()->identity->role==0){
$center = \backend\models\Center::find()->where(['user_id'=>$user_id])->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}else {
    $center = \backend\models\Center::find()->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}
$cates = \backend\models\Newcate::find()->all();
$cate= \yii\helpers\ArrayHelper::map($cates,'id' ,'name_uz');
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
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
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'location_uz')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'location_ru')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'location_en')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-3"><?= $form->field($model, 'date')->textInput(['type'=>'date']) ?></div>
        <div class="col-md-3"><?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-3">
            <?php
            echo $form->field($model, 'user_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $data,

                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-md-3">
            <?php
            echo $form->field($model, 'cate')->widget(\kartik\select2\Select2::classname(), [
                'data' => $cate,
                'options' => ['placeholder' => 'Tanlang ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>
<!--    --><?//= $form->field($model, 'image')->fileInput() ?>
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
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
