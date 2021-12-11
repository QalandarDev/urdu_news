<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadval */
/* @var $form yii\widgets\ActiveForm */

$user_id=Yii::$app->getUser()->identity->user;
$hodim = \backend\models\Hodim::find()->where(['cate'=>$user_id])->all();

$data = \yii\helpers\ArrayHelper::map($hodim,'id','name_uz');
?>

<div class="dars-jadval-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    echo $form->field($model, 'staff_id')->widget(\kartik\select2\Select2::classname(), [
        'data' => $data,

        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?= $form->field($model, 'semid')->dropDownList([
        '1' => "2020-2021 o'quv yili 1 - smestr",
        '2' => '2020-2021 o\'quv yili 2 - smestr',
    ]); ?>


    <?= $form->field($model, 'kun')->dropDownList([
        '1' => "Dushanba",
        '2' => 'Seshanba',
        '3' => 'Chorshanba',
        '4' => 'Payshanba',
        '5' => 'Juma',
        '6' => 'Shanba',
    ]); ?>
    <?= $form->field($model, 'juftlik')->dropDownList([
        '1' => "1-para  09:00-10:20",
        '2' => '2-para  10:30-11:50',
        '3' => '3-para  12:30-13:50',
        '4' => '4-para  14:00-15:30',
        '5' => '5-para  15:30-14:50',
        '6' => '6-para  17:00-18:20',
    ]); ?>
    <?= $form->field($model, 'megalka')->dropDownList([
        '0' => "To'liq",
        '1' => 'Ustki hafta',
        '2' => 'Pastki  hafta',
    ]); ?>


    <?= $form->field($model, 'fan')->textInput(['placeholder' => "Fan nonini kiriting!"]) ?>

    <?= $form->field($model, 'gurux')->textInput(['placeholder' => "Gurux nonini kiriting!"]) ?>


    <?= $form->field($model, 'lessontype_id')->dropDownList([
        '1' => "Ma'ruza",
        '2' => 'Amaliyot',
        '3' => 'Labaratoriya',
        '4' => 'Seminar',
    ]); ?>

    <?= $form->field($model, 'xona')->textInput(['placeholder' => "308, Asosiy bino"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>
	<?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->getUser()->identity->user]) ?>
    <?php ActiveForm::end(); ?>

</div>
