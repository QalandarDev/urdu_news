<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */
/* @var $form yii\widgets\ActiveForm */
$user_id=Yii::$app->getUser()->identity->user;
if(Yii::$app->getUser()->identity->role==0){
    $center = \backend\models\Center::find()->where(['user_id'=>$user_id])->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}else {
    $center = \backend\models\Center::find()->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}

?>
<?php if(Yii::$app->getUser()->identity->cate == 1){ ?>
<div class="center-page-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?php
    echo $form->field($model, 'about_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'about_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'about_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>

    <?php
    echo $form->field($model, 'ilmiy_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'ilmiy_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'ilmiy_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <?php
    echo $form->field($model, 'aloqa_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'aloqa_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'aloqa_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <?php
    echo $form->field($model, 'grant_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'grant_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'grant_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <?php
    echo $form->field($model, 'document_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'document_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'document_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <div class="row">

        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>
        </div>
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'user_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $data,
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php }?>
<?php if(Yii::$app->getUser()->identity->cate == 2){ ?>
<div class="center-page-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?php
    echo $form->field($model, 'about_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'about_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'about_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>

    <?php
    echo $form->field($model, 'ilmiy_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'ilmiy_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'ilmiy_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <?php
    echo $form->field($model, 'aloqa_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'aloqa_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'aloqa_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
    <?php
    echo $form->field($model, 'grant_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'grant_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'grant_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>
	<?php
    echo $form->field($model, 'savol')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'dastur')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>

    <div class="row">

        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>
        </div>
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'user_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $data,
               
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php }
if(Yii::$app->getUser()->identity->cate == 3){
?>

<div class="center-page-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?php
    echo $form->field($model, 'about_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);

    echo $form->field($model, 'about_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    echo $form->field($model, 'about_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);
    ?>

   
    <div class="row">

        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>
        </div>
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'user_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $data,
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div><?php }?>
