<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="center-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'position_uz') ?>

    <?= $form->field($model, 'position_ru') ?>

    <?= $form->field($model, 'position_en') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?php // echo $form->field($model, 'name_ru') ?>

    <?php // echo $form->field($model, 'name_en') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'reception_uz') ?>

    <?php // echo $form->field($model, 'reception_ru') ?>

    <?php // echo $form->field($model, 'reception_en') ?>

    <?php // echo $form->field($model, 'about_uz') ?>

    <?php // echo $form->field($model, 'about_ru') ?>

    <?php // echo $form->field($model, 'about_en') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'ilmiy_uz') ?>

    <?php // echo $form->field($model, 'ilmiy_ru') ?>

    <?php // echo $form->field($model, 'ilmiy_en') ?>

    <?php // echo $form->field($model, 'aloqa_uz') ?>

    <?php // echo $form->field($model, 'aloqa_ru') ?>

    <?php // echo $form->field($model, 'aloqa_en') ?>

    <?php // echo $form->field($model, 'grant_uz') ?>

    <?php // echo $form->field($model, 'grant_ru') ?>

    <?php // echo $form->field($model, 'grant_en') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
