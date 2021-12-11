<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim1 */

$this->title = Yii::t('app', 'Create Hodim1');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hodim1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hodim1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
