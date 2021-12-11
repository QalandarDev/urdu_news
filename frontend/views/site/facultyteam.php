
<?php

/* @var $this yii\web\View */
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;
?>

<div class="featured-area pb-140" >
    <div class="">

               <div class="row">
            
                <div class="col-md-12" style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px" >
                    <div class="blog-wrap" style="margin-top: 10px">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="blog-img" style="margin-top: 10px">
                                    <img src="/backend/web/hodimlar/<?=$views['img']?>" alt="<?=$titlepage?>" style="height: 210px;" alt="" />
                                </div>
                            </div>
                            <div class="col-md-8" style="margin-top: -15px">
                                <div class="blog-content">

                                    <p id="st"><?=$views[$name]?></p>
                                    <p id="st"><?=$views[$lav]?></p>
                                    <p id="st"><i class="fa fa-envelope"></i> <?=$views['email']?></p>
                                    <p id="st"><i class="fa fa-phone"></i> <?=$views['tel']?></p>
                                    <p id="st"><i class="fa fa-calendar"></i> <?=$views[$ilm]?></p>
                                    <p id="st"><i class="fa fa-calendar"></i> <?=$views[$ilm1]?></p>
                                 
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
                   <div class="col-md-12" style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px" >
                   <p>
                      <b><?=$hol[$title]?></b>
                       <?=$bio[$text]?>
                   </p>
        </div>
        </div>
    </div>
</div>
