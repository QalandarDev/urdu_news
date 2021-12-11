<?php


/* @var $this \yii\web\View */
/* @var $model array|\backend\models\News|null|\yii\db\ActiveRecord */
/* @var $home bool|string */
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\widgets\Masofaviy_menu;
?>
<section class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="single-service-wrap">
                <div style="background-color: #296dc1;padding: 16px 0px 5px 15px">
                    <p id="h" style="color: white"><b><?= $model->title ?></b></p>
                </div>

                <p style="font-size:25px;text-align: justify;">
                    <?= $model->text ?>
                </p>
                <img src="<?= $home ?>/images/<?= $model['img'] ?>" alt="<?= $model->title ?>" style="width:100%"
                     alt="">
            </div>
        </div>
        <div class="col-md-3">
            <?= Masofaviy_menu::widget();?>
        </div>
    </div>
</section>
