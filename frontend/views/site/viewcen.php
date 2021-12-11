
<?php

/* @var $this yii\web\View */
/* @var $home string */
$titlepage =Yii::t('app','Urgench State University');
$this->title = Yii::t('app','Urgench State University');
?>

<div class="featured-area pb-140" >
   

               <div class="row">

                <div class="col-md-12" style="padding: 20px 0px;" >
                   
                                <div style="float:left">
                                    <img src="<?=$home?>/hodimlar/<?=$team->img?>" alt="<?=Yii::t('app','Urgench State University')?>" style="
											height: 200px;
											width: 200px;
											object-fit: cover;
											margin-right: 50px;
											object-position: top;
											border: 1px solid #eee;" />
                                </div>
                           
                           
                                    <div style="padding: 20px 0px;">
										<h4><b><?=$team[$name]?></b></h4>
										<p id="h"><?=$team[$lav]?></p>
                                    	<p><i class="fa fa-envelope"></i> <?=$team['email']?></p>
                                    	<p><i class="fa fa-phone"></i> <?=$team['tel']?></p>
									</div>

                             
                        </div>




                   <div class="col-md-12" >
                   <p style="margin-top: 14px">

                       <?=$team[$autobiography]?>
                   </p>
        </div>
        </div>
  
</div>
