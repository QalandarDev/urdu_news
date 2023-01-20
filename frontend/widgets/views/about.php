<?php



/* @var $this View */

use yii\web\View;

?>
<div id="rs-about" class="rs-about style2 pt-5 pb-5 pt-md-3 pb-md-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pr-4 pr-1 mb-md-2"
                 data-bg-image="">
                <div class="about-intro" style="background: url('<?= Yii::getAlias('@web') . '/img/about_bg.webp' ?>')">
                    <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                         style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="sub-title primary">About Educavo</div>
                        <h2 class="title mb-21 white-color">Welcome to Educavo University</h2>
                        <div class="desc big white-color">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed
                            eius to mod tempors incididunt ut labore et dolore magna this aliqua enims ad minim.
                        </div>
                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
                         style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <a class="readon2" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 pl-lg-0 ml-2 ml-md-0">
                <div class="row rs-counter counter-area mb-2">
                    <div class="col-md-4">
                        <div class="counter-item one">
                            <div class="number rs-count kplus">41</div>
                            <div class="title mb-0"><?= Yii::t('news', "Number of students") ?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-item two">
                            <div class="number rs-count">3.50</div>
                            <div class="title mb-0">Average CGPA</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-item three">
                            <div class="number rs-count percent">95</div>
                            <div class="title mb-0">Graduates</div>
                        </div>
                    </div>
                </div>
                <div class="row grid-area">
                    <div class="col-md-6 mb-sm-2">
                        <div class="image-grid">
                            <img src="<?= Yii::getAlias('@web') . '/img/about1.webp' ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-grid">
                            <img src="<?= Yii::getAlias('@web') . '/img/about2.webp' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
