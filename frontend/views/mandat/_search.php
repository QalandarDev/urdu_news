<?php

use frontend\models\Mandat;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MandatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="mandat-search">
        <div class="row">

            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'validationStateOn' => ActiveForm::VALIDATION_STATE_ON_INPUT,
                'method' => 'get',
                'options' => [
                    'data-pjax' => 1,
                    'id'=>"mandatIDform"
                ],
            ]); ?>

            <div class="col-md-3">
                <?= $form->field($model, 'EN')->dropDownList([
                    'Кундузги' => "Kunduzgi",
                    'Сиртқи' => "Sirtqi",
                ],[
                    'prompt'=>'--Ta\'lim shakli--'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'LN')->dropDownList([
                    'ўзбекча' => "O'zbekcha",
                    'русча' => "Ruscha"
                ],
//                    ,['disabled'=>'true']
                    [
                         'prompt'=>'--Ta\'lim tili--']
                ) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'MN')->dropDownList(
                    ArrayHelper::map(Mandat::find()->groupBy(['MN'])->select(['MN'])->all(),'MN','MN')
//                    ,['disabled'=>'true']
                    ,
                    [
                        'prompt'=>'--Yo\'nalishni tanlang---'
                    ]
                ) ?>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
