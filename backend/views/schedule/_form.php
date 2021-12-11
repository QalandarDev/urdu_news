<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Center */
/* @var $form yii\widgets\ActiveForm */

$center = \backend\models\Center::find()->where(['cate'=>1])->all();
$data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
$cateal = \backend\models\CenterCate::find()->all();
$cate= \yii\helpers\ArrayHelper::map($cateal,'id' ,'name_uz');
?>

<div class="center-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model,'content_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[]),

    ]);?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
