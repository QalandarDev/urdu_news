
<?php

/* @var $this yii\web\View */
/* @var $home string */
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;
?>

<div class="featured-area pb-140" >
    

            
            
                <div class="col-md-12" >
                   

                        <div class="row">

                           <div style="float:left">
                                    <img src="<?=$team->image?>" alt="<?=$titlepage?>" style="height: 200px;
    width: 200px;
    object-fit: cover;
    margin-right: 50px;
    object-position: top;
    border: 1px solid #eee;" />
                                </div>
                           
                                    <p id="h"><?=$team[$name]?></p>
                                    <p><i class="fa fa-map-marker"> </i> <?=$team[$address]?></p>
                                    <p><i class="fa fa-calendar"> </i> <?=$team[$reception]?></p>
                                    <p><i class="fa fa-envelope"></i> <?=$team['email']?></p>
                                    <p><i class="fa fa-phone"></i> <?=$team['phone']?></p>
                                    
                               
                        </div>



                  

                </div>
                   <div class="col-md-12" >
                   <p>
<!--					   <b>--><?//=$hol?><!--</b>-->
                       <?=$team[$autobiography]?>
                   </p>
        </div>
       
   
</div>
