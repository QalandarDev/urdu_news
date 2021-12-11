<?php

use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Search;
use backend\models\Scholar;
use backend\models\Simplehtml;
use backend\models\Simplenode;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */
/* @var $form yii\widgets\ActiveForm */
$user_id = Yii::$app->getUser()->identity->user;
if (Yii::$app->getUser()->identity->role == 0) {
    $center = \backend\models\Center::find()->where(['user_id' => $user_id])->all();
    $data = ArrayHelper::map($center, 'id', 'name_uz');
} else {
    $center = \backend\models\Center::find()->all();
    $data = ArrayHelper::map($center, 'id', 'name_uz');
}
?>
<div class="news-form box box-primary">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="box-body table-responsive">
        <div class="row">
            <?php
            if (Yii::$app->getUser()->identity->cate == 1 || Yii::$app->getUser()->identity->cate == 2) {
                ?>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm_uz')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm1_uz')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
					<?php if (Yii::$app->getUser()->identity->role == 1): ?>
					       <?= $form->field($model, 'lav_uz')->textInput(['maxlength' => true]) ?>
					       <?= $form->field($model, 'lav_ru')->textInput(['maxlength' => true]) ?>
					       <?= $form->field($model, 'lav_en')->textInput(['maxlength' => true]) ?>
					<?php endif;?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm1_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->input('email') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm_en')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ilm1_en')->textInput(['maxlength' => true]) ?>
                    <?php
                    echo $form->field($model, 'cate')->widget(Select2::class, [
                        'data' => $data,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <?php
                    $searchform = new Search();
                    $lavozim = $searchform->mylavozim();
                    ?>


                    <?= $form->field($model, 'lav_id')->dropDownList($lavozim, ['prompt' => ' -- Tanlang --']);
                    ?>

                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_uz')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_ru')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_en')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>
            <?php }
            if (Yii::$app->getUser()->identity->cate == 3) {
                ?>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'lav_uz')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'lav_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->input('email') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'lav_en')->textInput(['maxlength' => true]) ?>
                    <?php
                    echo $form->field($model, 'cate')->widget(Select2::classname(), [
                        'data' => $data,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_uz')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_ru')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'text_en')->widget(CKEditor::class, [
                        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                    ]) ?>
                </div>

                <?php
                $searchform = new Search();
                $lavozim = $searchform->mylavozim();
                ?>
                <div class="col-md-12">
                    <?= $form->field($model, 'lav_id')->dropDownList($lavozim, ['prompt' => ' -- Tanlang --']);
                    ?>
                </div>

            <?php } ?>
            <hr>
            <div class="col-md-12">
                <?php if (!empty($model->img)) echo "<p><img src='/hodimlar/$model->img' style='max-width: 100px;'></p>" ?>
                <?= $form->field($model, 'image')->fileInput(['multiple' => false, 'accept' => 'image/*', 'required' => $model->isNewRecord]) ?>
            </div>
            <hr>
        </div>

    </div>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
