<?php



/* @var $this \yii\web\View */
/* @var $model array|\Page[]|\backend\models\AllCate[]|\backend\models\Center[]|\backend\models\DarsJadval[]|\backend\models\Events[]|\backend\models\Galery[]|\backend\models\Hodim[]|\backend\models\Interaktive[]|\backend\models\Newcate[]|\backend\models\News[]|\backend\models\Programm[]|\backend\models\Rectorate[]|\backend\models\Vidio[]|\yii\db\ActiveRecord[] */
/* @var $pages \yii\data\Pagination */
/* @var $home bool|string */

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use frontend\widgets\Masofaviy_menu;
$this->title = Yii::t('app', 'Urgench State University');

$this->params['breadcrumbs'][] = Yii::t('app', 'News');

?>

<section class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="h1-text">
                            <?= Yii::t('app', 'News') ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($model as $item) : ?>
                    <div class="col-md-12" style=" padding-bottom: 5px; border-bottom: 1px solid #ccc;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="blog-img" style="margin-top: 10px">
                                    <img src="<?= $item->img ?>" alt="<?= $item->title ?>" style="height: 150px;"/>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p><a id="h"
                                      href="<?= Url::to(['education/news', 'id' => $item->id]) ?>"><?= mb_substr($item->title, 0, 120) ?>
                                        ...</a></p>
                                <p><i class="fa fa-user"></i> Admin <i class="fa fa-calendar"></i> <?= $item['date'] ?> <i
                                        class="fa fa-eye"></i> <?= $item['count'] ?> </p>
                                <p id="st"><?= mb_substr(strip_tags($item->text), 0, 300) ?>...</p><br>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <?= LinkPager::widget(['pagination' => $pages,]); ?>
        </div>
        <div class="col-md-3">
            <?= Masofaviy_menu::widget();?>
        </div>
    </div>


</section>



