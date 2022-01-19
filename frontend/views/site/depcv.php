<?php
use yii\bootstrap\Tabs;
use yii\bootstrap\Widget;
use yii\widgets\Breadcrumbs;
use backend\models\Search;

/* @var $this yii\web\View */
/* @var $home string */
/*
$this->title = '';
$titlepage = array('title_uz'=>'Urganch Davlat Universiteti','title_ru'=>'Ургенчский Государственный Университет','title_en'=>'Urgench State University');
*/

$this->title=Yii::t('app','Urgench State University')."-".$team[$name];

$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Employees and Teachers'), 'url' => ['/staff']];

$this->params['breadcrumbs'][] =  ['label'=>$team[$name],'template' => "<li><b>{link}</b></li>\n"];
$weekdates = array('1'=> "<?php Yii::t('app','Monday');?>",'2'=>"<?php Yii::t('app','Tuesday')?>", '3'=>"<?php Yii::t('app','Wednesday')?>",'4'=>"<?php Yii::t('app','Thursday')?>", '5'=> "<?php Yii::t('app','Friday')?>",'6'=>"<?php Yii::t('app','Saturday')?>");
$lessontype = array('1'=>"<?php Yii::t('app','Lecture')?>",'2'=>"<?php Yii::t('app','Practice')?>",'3'=>"<?php Yii::t('app','Laboratory')?>",'4'=>"<?php Yii::t('app','Seminar')?>");
$megalka = array('0'=>"",'1'=>"<?php Yii::t('app','odd')?>",'2'=>"<?php Yii::t('app','even')?>");
$headtitle = array('1'=>"<?php Yii::t('app','Weekday')?>", '2'=>"<?php Yii::t('app','Pair')?>", '3'=>"<?php Yii::t('app','Subject') ?>", '4'=>"<?php Yii::t('app','Group')?>", '5'=>"<?php Yii::t('app','Room')?>", '6'=>"<?php Yii::t('app','Type lesson')?>",'7'=>"<?php Yii::t('app','Week')?>");

$timetable=Yii::t('app','Schedule of lessons');
$labels1= Yii::t('app','About');
$labels2=Yii::t('app', 'Publications');
$labels3= Yii::t('app','Schedule of lessons');

$interests=Yii::t('app','Research Interests: ');
$ilm= Yii::t('app','ilm_en');
$searchform = new Search(); 
	$center=$searchform->mydep();
	$lavozim=$searchform->mylavozim();
?>

<div class="featured-area pb-140" >
    <div class="">

               <div class="row">
             <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                <div class="col-md-12"  >
                    <div style="margin-top: 10px">

                        <div class="row">

                            
                           
                                <div style="float: left;">
                                <img src="<?=Yii::$app->homeUrl?>hodimlar/<?=$team->img?>" alt="<?=$this->title?>" style=" height: 200px; object-fit: cover; margin-right: 50px;"/>
                                </div>
                                    <h4><b><?=$team[$name]?></b></h4>
									<p ><?php echo $center[$team['cate']].", "; echo $lavozim[$team['lav_id']];?></p>
									 
                                    <p><i class="fa fa-envelope"></i> <?=$team['email']?></p>
                                    <p><i class="fa fa-phone"></i> <?=$team['tel']?></p>
							<p><small><strong><?=$interests?></strong></small></p>
<!--							<p><small>--><?//=$ilm?><!--</small></p>-->
							

                                
                            
                        </div>



                    </div>

                </div>
                   <div class="col-md-12" style=" margin-top: 10px">

					<ul id="w0" class="nav nav-tabs">
							<li class=""><a href="#1" data-toggle="tab" aria-expanded="true"><?=$labels1?></a></li>
							<li class="active"><a href="#2" data-toggle="tab" aria-expanded="false"><?=$labels2?></a></li>
							<li class=""><a href="#3" data-toggle="tab" aria-expanded="false"><?=$labels3?></a></li>
					</ul>

 <div class="tab-content">

 <div id="1" class="tab-pane "><?=$team[$autobiography]?></div>
 <div id="2" class="tab-pane active">
         <?php
            if (strlen($team['scholar'])!=12) { echo "Not access";}
            else {printf("Список публикаций на <a href=\"https://scholar.google.com/citations?hl=en&user=%s&view_op=list_works&sortby=pubdate\">Google Scholar</a>",$team['scholar']);
             echo $team['GS'];};?>
         
 </div>
 <!--div id="3" class="tab-pane">



					   <p style="text-align: center;color: #0d6aad;font-size: 20px"><b><?=$timetable?></b></p>
                       <table class="table table-striped">
                           <thead>
                           <tr style="background-color: #0d6aad;color: white">
                           <?php
printf("<th>%s</th><th nowrap>%s</th><th nowrap>%s</th><th nowrap>%s</th><th nowrap>%s</th><th nowrap>%s</th><th nowrap>%s</th>",$headtitle['1'],$headtitle['2'],$headtitle['3'],$headtitle['4'],$headtitle['5'],$headtitle['6'],$headtitle['7']);
							?>
                           </tr>
                           </thead>
                           <tbody>
                        <?php
$jadval=[];
                        foreach ($jadval as $item){
                        ?>
                           <tr>
                               <td>
                                   <?php
									echo $weekdates[$item['kun']];
                                   ?>

                                   </td>
							   <td ><?=$item['juftlik']?></td>

                               <td><?=$item['fan']?></td>
                               <td><?=$item['gurux']?></td>
                               <td><?=$item['xona']?></td>
                               <td>
                                   <?php  echo $lessontype[$item['lessontype_id']];

                                   ?>
                               </td>

                               <td>
                                   <?php echo $megalka[$item['megalka']]; 
								   ?>
                               </td>
                           </tr>
                           <?php 	}
							   ?>
                           </tbody>
                       </table>


				</div--->
 </div>
        </div>
        </div>
    </div>
</div>
