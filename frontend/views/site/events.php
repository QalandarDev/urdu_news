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

				  <div class="page-header"> <h2 class="h1-text"><?=$titlelang?></h2></div>



            <?php foreach ($model as $item) {?>
                <div class="col-md-12" style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px" >
                    <div class="blog-wrap" style="margin-top: 10px">

                      <div class="row">

                          <div class="col-md-4">
                              <div class="blog-img" style="margin-top: 10px">
                                  <img src="<?=$home?><?php
                                  if (!empty($item->img)) {
                                      echo "/images/" . $item->img;
                                  }else{
                                      echo "/img/urdu_log.png";
                                  }
                                  ?>" alt="<?= $titlepage?>" style="height: 210px;" />
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
                                  <p id="st"><?=mb_substr($item[$text],0,150)?>...</p>
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
<div class="snowflakes" aria-hidden="true">
    <div class="snowflake" style="color:white">
        ❅
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake" style="color:white">
        ❆
    </div>
    <div class="snowflake">
        ❄
    </div>
    <div class="snowflake"  style="color:white">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake"  style="color:white">
        ❄
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake"  style="color:white">
        ❆
    </div>
    <div class="snowflake">
        ❄
    </div>
</div>


<style>
       @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0px);transform:translateX(0px)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}100%{-webkit-transform:translateX(0px);transform:translateX(0px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%{transform:translateX(0px)}50%{transform:translateX(80px)}100%{transform:translateX(0px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}
    /* Demo Purpose Only*/
    .demo {
        font-family: 'Raleway', sans-serif;
        color:#fff;
        display: block;
        margin: 0 auto;
        padding: 15px 0;
        text-align: center;
    }
    .demo a{
        font-family: 'Raleway', sans-serif;
        color: #000;
    }
</style>
