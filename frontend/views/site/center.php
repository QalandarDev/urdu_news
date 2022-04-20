<?php
/* @var $this \yii\web\View */
/* @var $home string */
$titlelang = Yii::t('app','Centres and departments');

$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;

?>
<!-- team-area start -->
<section class="">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
					<div class="col-md-12">
                <div class="row">
                   <div class="page-header"> <h2 class="h1-text"><?=$titlelang?></h2></div>

                </div>
            </div>



                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">

            <?php foreach ($model as $item) {?>
            <a href="<?=\yii\helpers\Url::to(['/site/centerview?id='.$item->id])?>"><div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                <div class="team-wrap"  style="border-style: solid;border-color: rgba(56, 46, 112, 0.13);">
                    <div class="team-img">
                        <img src="<?=$item->image?>" alt="<?=$titlepage?>" style="height: 175px" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <a href="<?=\yii\helpers\Url::to(['/site/centerview?id='.$item->id])?>">  <h3 id="p" style="font-size: 13px;margin-top: -10px;line-height: 1.6;font-family: Arial"><?=$item[$name]?></h3>
                        </a>


                        </div>
                    </div>
                </div>
                <br>
            </div>
				 </a>
				<?php }?>

        </div>
    </div>
</section>
