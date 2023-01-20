<?php



/* @var $this \yii\web\View */

use yii\bootstrap5\Html;

?>
<div class="rs-degree style1 modify gray-bg pt-5 pb-4 pt-md-4 pb-md-2">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="sub-title primary">
                        <?= Yii::t('news', "Education types") ?>
                    </div>
                    <h2 class="title mb-0">
                        <?= Yii::t('news', "Urgench State University education types") ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/1.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "Bachelor's degree") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Bachelor's degree") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "State educational standard"), ['page/view', 'id' => 31]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Normative legal act"), ['page/view', 'id' => 95]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Schedule of the educational process"), ['page/view', 'id' => 144]) ?>
                            <br>
                        </p>
                        <div class="btn-part">
                            <?= Html::a(Yii::t('news', "Curriculum catalog"), ['page/view', 'id' => 145]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/2.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">

                            <?= Yii::t('news', "Master's degree") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Master's degree") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', 'Instruction'), ['page/view', 'id' => 30]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Grade performance"), ['page/view', 'id' => 87]) ?>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/3.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "Doctorate") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "Doctorate") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "Entrance Test Questions"), ['page/view', 'id' => 234]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Results of entrance examinations"), ['page/view', 'id' => 169]) ?>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/4.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">
                            <?= Yii::t('news', "International students") ?>
                        </div>
                    </div>
                    <div class="content-part">
                        <div class="title">
                            <a href="#">
                                <?= Yii::t('news', "International students") ?>
                            </a>
                        </div>
                        <p class="desc">
                            <?= Html::a(Yii::t('news', "Admission"), ['page/view', 'id' => 48]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Security"), ['page/view', 'id' => 49]) ?>
                            <br>
                            <?= Html::a(Yii::t('news', "Dormitory"), ['page/view', 'id' => 50]) ?>
                            <br>
                        </p>
                        <div class="btn-part">
                            <?= Html::a(Yii::t('news', "Read All"), ['applicant/international-student']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="degree-wrap">
                    <img src="<?= Yii::getAlias('@web') . '/img/degree/5.webp' ?>" alt="">
                    <div class="title-part">
                        <div class="title">PHD Scholarships</div>
                    </div>
                    <div class="content-part">
                        <div class="title"><a href="#">PHD Scholarships</a></div>
                        <p class="desc">Nam libero temporal, cum solute nobs est diligent option cumquat nil impeded quo
                            minus id quod </p>
                        <div class="btn-part">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
