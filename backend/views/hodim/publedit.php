<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Search;
use backend\models\Scholar;
use backend\models\Simplehtml;
use backend\models\Simplenode;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */
/* @var $form yii\widgets\ActiveForm */
$user_id=Yii::$app->getUser()->identity->user;
if(Yii::$app->getUser()->identity->role==0){
    $center = \backend\models\Center::find()->where(['user_id'=>$user_id])->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}else {
    $center = \backend\models\Center::find()->all();
    $data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
}
?>
<?php

$this->title=Yii::t('app','Urgench State University')."-".Yii::t('app','Employees and Teachers')."-".Yii::t('app','Publications');

$this->params['breadcrumbs'][] = Yii::t('app','Employees and Teachers');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Publications'), 'url' => ['../admin/hodim/publications']];

$this->params['breadcrumbs'][] =  ['label'=>$model->name_uz,'template' => "<li><b>{link}</b></li>\n"];

?>




    
<div class="hodim-form" style="padding: 10px">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <img src="/img/google_scholar_img.png" alt="">
      <?= $form->field($model, 'scholar')->textInput(['maxlength' => true, 'required' => 'required']) ?>
        
            
       
        
        <div class="form-group">
        
            <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>