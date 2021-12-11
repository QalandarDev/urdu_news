<?php

use backend\models\Center;
use backend\models\CenterCate;
use backend\models\User;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index box box-primary">

    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box-body table-responsive no-padding">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'summary' => '',
            'columns' => [
                ['class' => SerialColumn::class],

                'id',
                'username',
                'email:email',
                [
                    'label' => 'Department',
                    'attribute' => 'user',
                    'value' => 'center0.name_uz'
                ],
                'role',
                //'password_hash',
                //'status',
                //'auth_key',
                //'password_reset_token',
                //'account_activation_token',
                'created_at:date',
                'updated_at:date',

                ['class' => ActionColumn::class],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>

</div>
