<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RectorateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rectorate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'position_uz') ?>

    <?php // echo $form->field($model, 'position_ru') ?>

    <?php // echo $form->field($model, 'position_en') ?>

    <?php // echo $form->field($model, 'title_uz') ?>

    <?php // echo $form->field($model, 'title_ru') ?>

    <?php // echo $form->field($model, 'title_en') ?>

    <?php // echo $form->field($model, 'address_uz') ?>

    <?php // echo $form->field($model, 'address_ru') ?>

    <?php // echo $form->field($model, 'address_en') ?>

    <?php // echo $form->field($model, 'reception_uz') ?>

    <?php // echo $form->field($model, 'reception_ru') ?>

    <?php // echo $form->field($model, 'reception_en') ?>

    <?php // echo $form->field($model, 'autobiography_uz') ?>

    <?php // echo $form->field($model, 'autobiography_ru') ?>

    <?php // echo $form->field($model, 'autobiography_en') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
