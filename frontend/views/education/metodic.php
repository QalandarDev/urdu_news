<?php


/* @var $this \yii\web\View */

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

            <ul>
                <li>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u343vXtHsgo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
				<li>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6R1TM6lGrCQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?= $home ?>/pdf/darslar1.pdf"
                       target="blank">Moodlega dars mashg'ulatlarini qo'shish tartibi</a>
                </li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?= $home ?>/pdf/bazirlik2.docx"
                       target="blank">Talabalarning masofaviy kurslardan foydalanish tartibi</a>
                </li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?= $home ?>/pdf/youtube3.pdf"
                       target="blank">
                        youtube.com saytidagi vidioni MOODLE tizmiga yuklash
                    </a>
                </li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?= $home ?>/pdf/kanal4.pdf"
                       target="blank">
                        MOODLE tizmidagi kursga matiryal qo'shish
                    </a>
                </li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?= $home ?>/pdf/talaba5.pdf"
                       target="blank">OO'MTVning elektron ta'lim resurslarigaqo'yiladigan talablar
                    </a>
                </li>


            </ul>
        </div>
        <div class="col-md-3">
            <?= Masofaviy_menu::widget();?>
        </div>
    </div>
</section>
