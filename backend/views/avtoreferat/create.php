<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avtoreferat */

$this->title = Yii::t('app', 'Create Avtoreferat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avtoreferats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtoreferat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
