<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Newcate */

$this->title = Yii::t('app', 'Create Newcate');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Newcates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newcate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
