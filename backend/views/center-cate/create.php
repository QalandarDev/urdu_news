<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterCate */

$this->title = Yii::t('app', 'Create Center Cate');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Center Cates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-cate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
