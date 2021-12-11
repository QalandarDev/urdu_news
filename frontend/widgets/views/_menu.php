<?php



/* @var $this \yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
?>

<aside class="service-sidebar">
    <div class="sidebar-menu">
        <ul>
            <li style=" border-top: 1px solid #296dc1"><a href="<?=Url::to(['education/news'])?>"
                                                          style="color: black;background-color:rgba(146, 173, 255, 0.05)"><b>
                        <?= Yii::t('app', 'News') ?></b></a>
            </li>
            <li><?= Html::a(Yii::t('app', 'Me\'eriy xujjatlar'), ['education/normative']) ?></li>
            <li><?= Html::a(Yii::t('app', 'Dars jadvallari'), ['education/schedule']) ?></li>
            <li><?= Html::a(Yii::t('app', 'Metodik ko‘rsatmalar'), ['education/metodic']) ?></li>
            <li><?= Html::a(Yii::t('app', 'dl.urdu.uz'), 'http://dl.urdu.uz') ?></li>
        </ul>
    </div>
</aside>
