<?php

/* @var $this yii\web\View */
/* @var $model backend\models\News */

/* @var $form yii\widgets\ActiveForm */

use backend\models\Center;
use backend\models\Newcate;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder as ElFinderAlias;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;

$user_id = Yii::$app->getUser()->identity->user;
if (Yii::$app->getUser()->identity->role == 0) {
    $center = Center::find()->where(['user_id' => $user_id])->all();
    $data = ArrayHelper::map($center, 'id', 'name_uz');
} else {
    $center = Center::find()->all();
    $data = ArrayHelper::map($center, 'id', 'name_uz');
}

$cates = Newcate::find()->all();
$cate = ArrayHelper::map($cates, 'id', 'name_uz');
?>

<div class="news-form box box-primary">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="box-body table-responsive">
        <div class="row">
            <div class="col-md-4">    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <?php
        echo $form->field($model, 'text_uz')->widget(CKEditor::className(), [
            'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),

        ]);

        echo $form->field($model, 'text_ru')->widget(CKEditor::class, [
            'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),

        ]);
        echo $form->field($model, 'text_en')->widget(CKEditor::class, [
            'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),

        ]);
        ?>


        <div class="row">
            <div class="col-md-4">
                <?php
                echo $form->field($model, 'cate')->widget(Select2::class, [
                    'data' => $cate,
                    'options' => ['placeholder' => 'Tanlang ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?></div>
            <div class="col-md-4">
                <?php
                echo $form->field($model, 'user_id')->widget(Select2::class, [
                    'data' => $data,
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>

            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>
            </div>
        </div>

        <?= $form->field($model, 'img')->widget(InputFile::class, [
            'language' => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options' => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple' => false       // возможность выбора нескольких файлов
        ]); ?>


    </div>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
