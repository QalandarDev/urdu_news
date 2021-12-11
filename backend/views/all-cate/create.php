<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AllCate */

$this->title = Yii::t('app', 'Create All Cate');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'All Cates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="all-cate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
