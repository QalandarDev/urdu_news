<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CenterPage */

$this->title = Yii::t('app', 'Create Center Page');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Center Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
