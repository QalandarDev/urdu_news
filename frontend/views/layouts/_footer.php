<?php
/**
 * @var $this \yii\web\View
 */

use yii\helpers\Url;
$title = "title_" . Yii::$app->language;
$tuzilma = Yii::t('app','Structure');
$univer = Yii::t('app','History of University');
$nizom = Yii::t('app','Regulation of University');
$rektorat = Yii::t('app','Rectorate');
$faculty = Yii::t('app','Faculties');
$department = Yii::t('app','Departments');
$center = Yii::t('app','Centers and departments');
$home = Yii::t('app','Home');
$news = Yii::t('app','News');
$events = Yii::t('app','Events');
$xorijiyt = \backend\models\AllAction::find()->where(['cate' => 9, 'status' => 1])->all();
?>
<footer>
    <div class="footer-top particles-js-canvas-el">
        <div class="container ">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
                    <div class="footer-widget footer-logo">
                        <h4 style="color: white"><?= Yii::t('app', 'Urgench state university') ?></h4>
                        <p> <?= Yii::t('app','14, Kh.Alimdjan str, Urgench city, 220100, Uzbekistan')?></p>
                        <ul>
                            <li><i class="fa fa-phone"></i> +998 62 224 6700</li>
                            <li><i class="fa fa-envelope"></i> info@urdu.uz</li>
                            <li><i class="fa fa-bus"></i> <?= Yii::t('app','Bus')?> 7,13,28</li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-widget footer-menu">
                        <h2><?= Yii::t('app', 'University') ?></h2>
                        <ul>
                            <li>
                                <a href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'History of University') ?></a>
                            </li>
                           <li><a href="<?=Url::to(['/site/nizom'])?>">
                            <?=$nizom?></a></li>
                            <li><a href="<?=Url::to(['/site/rektorat'])?>">
                            <?=$rektorat?></a></li>
                            <li><a href="<?=Url::to(['/site/faculty'])?>">
                            <?=$faculty?></a></li>
                            <li><a href="
                            <?=Url::to(['/site/department'])?>"><?=$department?></a></li>
                           <li><a href="<?=Url::to(['/site/center'])?>">
                            <?=$center?></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-widget footer-menu">
                                                <h2><?= Yii::t('app', 'International students') ?></h2>
                                                <ul>
                                                    <?php foreach ($xorijiyt as $mag){?>
                                                        <li><a href="
                        <?=Url::to(['/site/active?id='.$mag->id])?>"><?=$mag[$title]?></a></li>
                                                    <?php }?>
                                                </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11942.14323581156!2d60.6068184!3d41.5576469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ecae3ad4fa60ac6!2sUrganch%20Davlat%20Universiteti!5e0!3m2!1suz!2s!4v1637305291818!5m2!1suz!2s"
                            width="140%" height="400rem" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom  ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright UrSU &copy;<script>document.write(new Date().getFullYear());</script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-md-6" style="text-align:right">
                    <!-- START WWW.UZ TOP-RATING -->
                    <SCRIPT language="javascript" type="text/javascript">
                        top_js = "1.0";
                        top_r = "id=29603&r=" + escape(document.referrer) + "&pg=" + escape(window.location.href);
                        document.cookie = "smart_top=1; path=/";
                        top_r += "&c=" + (document.cookie ? "Y" : "N")
                    </SCRIPT>
                    <SCRIPT language="javascript1.1" type="text/javascript">
                        top_js = "1.1";
                        top_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N")
                    </SCRIPT>
                    <SCRIPT language="javascript1.2" type="text/javascript">
                        top_js = "1.2";
                        top_r += "&wh=" + screen.width + 'x' + screen.height + "&px=" + (((navigator.appName.substring(0, 3) == "Mic")) ? screen.colorDepth : screen.pixelDepth)
                    </SCRIPT>
                    <SCRIPT language="javascript1.3" type="text/javascript">
                        top_js = "1.3";
                    </SCRIPT>
                    <SCRIPT language="JavaScript" type="text/javascript">
                        top_rat = "&col=0063AF&t=ffffff&p=DD7900";
                        top_r += "&js=" + top_js + "";
                        document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top></a>')
                    </SCRIPT>
                    <a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top><IMG height=31
                                                                                             src="https://www.uz/plugins/top_rating/count/nojs_cnt.png?id=29603&pg=http%3A//urdu.uz&col=0063AF&t=ffffff&p=DD7900"
                                                                                             width=88 border=0
                                                                                             alt="Топ рейтинг www.uz"/></a>
                    <!-- FINISH WWW.UZ TOP-RATING -->

                    <!--Start Yandex.Metrika informer 
             <!--        <a href="https://metrika.yandex.com/stat/?id=55254439&amp;from=informer"
                       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55254439/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="55254439" data-lang="ru" /></a>-->
                    <!--       <noscript><div><img src="https://mc.yandex.ru/watch/55254439" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
                    <!--End Yandex.Metrika informer -->

                </div>
            </div>
        </div>
    </div>
</footer>
