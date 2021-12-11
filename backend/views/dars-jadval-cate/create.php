<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DarsJadval */

$this->title = Yii::t('app', 'Create Dars Jadval');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dars Jadvals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-jadval-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
