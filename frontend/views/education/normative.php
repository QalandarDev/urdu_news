<?php


/* @var $this \yii\web\View */
/* @var $home string */

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
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="http://www.lex.uz/docs/<?php if (Yii::$app->language == 'ru')
                        echo '3420875';
                    else  echo '-3420313';
                    ?>"
                       target="blank">OLIY TA’LIM MUASSASASIDA SIRTQI (MAXSUS SIRTQI) VA KECHKI (SMENALI) TA’LIMNI
                        TASHKIL ETISH TARTIBI TO‘G‘RISIDAGI NIZOMLARNI TASDIQLASH HAQIDA</a>
                </li>
                <li><img src="https://urdu.uz/file/documents/pdf-icon.png" width="25">
                    <a download href="<?=$home?>/pdf/elektron_resusrlarga_talablar.pdf"
                       target="blank">Ta'lim yo'nalishi va mutaxasislik fanlari bo'yicha elektron resurslarga qo'yiladigan talablar</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <?= Masofaviy_menu::widget();?>
        </div>
    </div>
</section>
