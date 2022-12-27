<?php
/** @var $teams \backend\models\Rectorate[]
 * @var $team \backend\models\Rectorate
 */
?>
<div id="rs-team" class="rs-team style1 pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
    <div class="container">
        <div class="row">
            <?php foreach($teams as $team):?>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="team-item">
                    <img src="<?= $team->image?>" alt="">
                    <div class="content-part">
                        <h4 class="name"><a href="<?= \yii\helpers\Url::to(['page/adminstration-team','id'=>$team->id])?>"><?= $team->name?></a></h4>
                        <span class="designation"><?= $team->position?></span>
                        <ul class="social-links">
                            <li><a href="tel:<?= $team->phone?>"><i class="fa fa-phone"></i><?= $team->phone?></a></li>
                            <li><a href="mailto:<?= $team->email?>"><i class="fa fa-envelope"></i><?= $team->email?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
