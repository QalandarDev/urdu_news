<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vidio */

$this->title = Yii::t('app', 'Create Vidio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vidios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vidio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
