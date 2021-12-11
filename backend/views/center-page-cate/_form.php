<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="center-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'ilmiy_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ilmiy_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ilmiy_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aloqa_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aloqa_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aloqa_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grant_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grant_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grant_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reja_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reja_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reja_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'savol')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dastur')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
