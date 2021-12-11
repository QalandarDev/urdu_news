<?php



/* @var $this \yii\web\View */
/* @var $model \backend\models\Center[] */
/* @var $home string */
use frontend\widgets\Masofaviy_menu;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="container">
  <div class="row">
      <div class="col-md-9">
          <div class="row">
              <div class="page-header"><h2 class="h1-text">Fakultetlar</h2></div>
              <?php foreach ($model as $item) { ?>
                  <a href="<?= Url::to(['education/schedule','id'=>$item->id]) ?>">
                      <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                          <div class="team-wrap" style="border-style: solid;border-color: rgba(56, 46, 112, 0.13);">
                              <div class="team-img" style="height:150px">
                                  <img src="<?= $home ?>/images/<?= $item->image ?>" alt="<?= Yii::t('app','Urgench State University') ?>"
                                       style="height: 185px" />
                              </div>
                              <div class="team-content" style="height:69px">
                                  <div class="team-info">
                                      <h3 id="p"
                                          style="font-size: 13px;margin-top: -10px;line-height: 1.6;font-family: Arial"><?= $item->name_uz ?></h3>


                                  </div>
                              </div>
                          </div>
                          <br>
                      </div>
                  </a>
              <?php } ?>

          </div>
      </div>
      <div class="col-md-3">
          <?= Masofaviy_menu::widget();?>
      </div>
  </div>
</div>
