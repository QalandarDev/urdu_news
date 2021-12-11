<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HodimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hodim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'lav_uz') ?>

    <?php // echo $form->field($model, 'lav_ru') ?>

    <?php // echo $form->field($model, 'lav_en') ?>

    <?php // echo $form->field($model, 'ilm_uz') ?>

    <?php // echo $form->field($model, 'ilm_ru') ?>

    <?php // echo $form->field($model, 'ilm_en') ?>

    <?php // echo $form->field($model, 'ilm1_uz') ?>

    <?php // echo $form->field($model, 'ilm1_ru') ?>

    <?php // echo $form->field($model, 'ilm1_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'text_uz') ?>

    <?php // echo $form->field($model, 'text_ru') ?>

    <?php // echo $form->field($model, 'text_en') ?>

    <?php // echo $form->field($model, 'cate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
