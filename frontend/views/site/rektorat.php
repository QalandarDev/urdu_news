
<?php

/* @var $this yii\web\View */
/* @var $home string */
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;
?>

<div class="" >
    <div class="">

               <div class="row">
            <?php foreach ($team as $item) {?>
                <div class="col-md-12" >
                    <div style="margin-top: 10px">

                        <div class="row">

                            <div style="float:left">
                                
                                    <img src="<?=$home?>/images/<?=$item->image?>" alt="<?=$titlepage?>" style="    height: 200px;
    width: 300px;
    object-fit: cover;
    margin-right: 50px;
    object-position: center;
    border: 1px solid #eee;"/>
                                
                            </div>
                            
									<p id="h"><?=$item[$position]?></p>
                                    <p><b><a href="<?=\yii\helpers\Url::to(['/site/viewteam?id='.$item->id])?>" style="text-transform: uppercase;"><?=$item[$name]?></a></b></p>
							        <p><i class="fa fa-map-marker"> </i> <?=$item[$address]?></p>
                                    <p><i class="fa fa-calendar"> </i> <?=$item[$reception]?></p>
                                    <p><i class="fa fa-envelope"></i> <?=$item['email']?></p>
                                    <p><i class="fa fa-phone"></i> <?=$item['phone']?></p>

                                    
                                </div>
                          


                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
