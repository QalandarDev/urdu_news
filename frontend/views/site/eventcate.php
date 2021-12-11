<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.06.2019
 * Time: 9:41
 */
 $more = Yii::t('app','Read mor');
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;
?>


<section class="" >
<!--    --><?php //\yii\widgets\Pjax::begin(); ?>
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <h2 style=" font-family: Georgia;font-size: 20px;"><?=$titlelang[$name]?></h2>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <b><hr style=" border-top: 3px solid rgba(43, 43, 87, 0.34);margin-top: 10px"></b>
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
                                  <img src="<?=$home?><?php
                                  if (!empty($item->img)) {
                                      echo "/images/" . $item->img;
                                  }else
                                      echo "/img/urdu_log.png";
                                  ?>" alt="<?=$titlepage?>" style="height: 210px;" />
                              </div>
                          </div>
                          <div class="col-md-8" style="margin-top: -15px">
                              <div class="blog-content">
                                  <p><a id="h" href="<?=\yii\helpers\Url::to(['/site/views?id='.$item->id])?>"><?=mb_substr($item[$title],0,68)?>...</a></p>
                                  <div class="blog-meta">
                                      <ul>
                                          <li ><a id="st" href="#"><i class="fa fa-user"></i> Admin</a></li>
                                          <li><a href="#" id="st"><i class="fa fa-calendar"></i><?=$item['date']?> </a></li>
                                          <li><a href="#" id="st"><i class="fa fa-clock-o"></i><?=$item['time']?> </a></li>
                                          <li><a href="#" id="st"><i class="fa fa-eye"></i> <?=$item['count']?> </a></li>
                                      </ul>
                                  </div>
                                  <p id="st"><?=mb_substr($item[$text],0,250)?>...</p>
                                  <p><a href="#" id="st"><i class="fa fa-map-marker"></i> <?=$item[$loc]?> </a></p>

                                  <a href="<?=\yii\helpers\Url::to(['/site/views?id='.$item->id])?>" class="btn-style pull-right"><?=$more?></a><br>
                              </div>
                          </div>
                      </div>


                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages,]);?>
<!--    --><?php //\yii\widgets\Pjax::end(); ?>

</section>
