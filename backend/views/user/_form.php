<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form box box-primary">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'user')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\backend\models\Center::find()->all(), 'id', 'name_uz'),
            'options' => ['placeholder' => 'Select a User ...',],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('User'); ?>
        <?= $form->field($model, 'role')->dropDownList(['1'=>'ADMIN','0'=>'USER','3'=>'AVTOREFERAT'],['prompt'=>'--SELECT--']) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
