<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hodim1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lav_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lav_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lav_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lav')->textInput() ?>

    <?= $form->field($model, 'ilm_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ilm_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ilm_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ilm1_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ilm1_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ilm1_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cate')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
