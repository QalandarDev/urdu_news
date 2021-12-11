<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Center Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Center Page'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'about_uz:ntext',
            'about_ru:ntext',
            'about_en:ntext',
            'user_id',
            //'date',
            //'ilmiy_uz:ntext',
            //'ilmiy_ru:ntext',
            //'ilmiy_en:ntext',
            //'aloqa_uz:ntext',
            //'aloqa_ru:ntext',
            //'aloqa_en:ntext',
            //'grant_uz:ntext',
            //'grant_ru:ntext',
            //'grant_en:ntext',
            //'document_uz:ntext',
            //'document_ru:ntext',
            //'document_en:ntext',
            //'reja_uz:ntext',
            //'reja_ru:ntext',
            //'reja_en:ntext',
            //'savol:ntext',
            //'dastur:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
