<?php
/**
 * @var $this \yii\web\View
 * @var $model \backend\models\Events []
 * @var $pages LinkPager
 * @var $home string
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'Urgench State University')
?>


<section class="">
    <div class="">
        <div class="row">

            <div class="page-header">
                <h2 class="h1-text">
                    <?= Yii::t('app', 'Latest events') ?>
                </h2>
            </div>
            <?php foreach ($model as $item) : ?>
                <div class="col-md-12"
                     style=" border-style: solid;border-color: rgba(56, 46, 112, 0.13);margin-top: 4px">
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
                                    ?>" alt="<?= $item->title ?>"
                                         style="height: 210px;"/>
                                </div>
                            </div>
                            <div class="col-md-8" style="margin-top: -15px">
                                <div class="blog-content">
                                    <p><a id="h"
                                          href="<?= Url::to(['news/events', 'id' => $item->id]) ?>"><?= mb_substr($item->title, 0, 68) ?>
                                            ...</a></p>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a id="st" href="#"><i class="fa fa-user"></i> Admin</a></li>
                                            <li><a href="#" id="st"><i class="fa fa-calendar"></i><?= $item->date ?>
                                                </a></li>
                                            <li><a href="#" id="st"><i class="fa fa-clock-o"></i><?= $item->time ?>
                                                </a></li>
                                            <li><a href="#" id="st"><i class="fa fa-eye"></i> <?= $item->count ?> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p id="st"><?= mb_substr(strip_tags($item->text), 0, 150) ?>...</p>
                                    <p><a href="#" id="st"><i class="fa fa-map-marker"></i> <?= $item->location ?> </a>
                                    </p>

                                    <a href="<?= Url::to(['news/events', 'id' => $item->id]) ?>"
                                       class="btn-style pull-right">
                                        <?= Yii::t('app', 'Read more') ?></a><br>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?= LinkPager::widget(['pagination' => $pages])?>

</section>
