<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.06.2019
 * @var $home string
 * @var $this \yii\web\View
 */
 $more =Yii::t('app','Read more');
 $fikr =Yii::t('app','Comments');
 $vidio =Yii::t('app','Video gallery');
 $photo =Yii::t('app','Photo gallery');
 $titlepage =Yii::t('app','Urgench State University');
 $this->title = $titlepage;
?>


<section class="" >
    <div class="">

<div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <h2 style=" font-family: Georgia;font-size: 20px;"><?=$titlelang[$name]?></h2>
                        </div>
                    </div>
					<div class="col-md-2">
                        <div class="">
                            <h2 style=" font-family: Georgia;font-size: 20px;"><a style=" font-family: Georgia;font-size: 20px;" href="https://urdu.uz/en/site/vidio"><?=$vidio?></a></h2>
                        </div>
                    </div>
					<div class="col-md-2">
                        <div class="">
                            <h2 style=" font-family: Georgia;font-size: 20px;"><a style=" font-family: Georgia;font-size: 20px;" href="https://urdu.uz/en/site/gallery"><?=$photo?></a></h2>
                        </div>
                    </div>
                    <div class="col-md-5" style="margin-top:-5px">
						<a href="https://t.me/UrDU_Meningfikrim" style=" font-family: Georgia;font-size: 20px;"><img src="<?=$home?>/images/fikiruchun.png" width="50"style="margin-top:-10px" /> <?=$fikr?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($model as $item) {?>
                <div class="col-md-12" style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px" >
                    <div class="blog-wrap" style="margin-top: 10px">

                      <div class="row">

                          <div class="col-md-4">
                              <div class="blog-img" style="margin-top: 10px">
                                  <img src="<?=$item->img?>" style="height: 200px;" alt="<?=$titlepage?>" />
                              </div>
                          </div>
                          <div class="col-md-8" style="margin-top: -15px">
                              <div class="blog-content">
                                  <p><a id="h" href="<?=\yii\helpers\Url::to(['/site/view?id='.$item->id])?>"><?=mb_substr($item[$title],0,68)?>...</a></p>

                                  <div class="blog-meta" style="margin-top: 15%">
                                      <ul>
                                          <li ><a id="st" href="#"><i class="fa fa-user"></i> Admin</a></li>
                                          <li><a href="#" id="st"><i class="fa fa-calendar"></i><?=$item['date']?> </a></li>
                                          <li><a href="#" id="st"><i class="fa fa-eye"></i> <?=$item['count']?> </a></li>
                                      </ul>
                                  </div>
                                  <a href="<?=\yii\helpers\Url::to(['/site/view?id='.$item->id])?>" class="btn-style pull-right" ><?=$more?></a><br>
                                  </div>

                          </div>
                      </div>


                    </div>
                </div>
            <?php }?>
        </div>
    </div>

<?= \yii\widgets\LinkPager::widget(['pagination' => $pages]);?>
</section>

