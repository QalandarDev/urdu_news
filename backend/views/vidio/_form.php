<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Vidio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vidio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
