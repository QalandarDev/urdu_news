<?php
/**
 * @var $this \yii\web\View
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use dmstr\widgets\Menu;
/* @var $this \yii\web\View */
/* @var $content string */
/**
 * @var \backend\models\User   $main
 */
$main = Yii::$app->getUser()->getIdentity();
?>
<aside class="main-sidebar" style="background-color: rgba(27, 72, 188, 0.4)">

    <section class="sidebar" style="margin-top: -10px">

        <!-- Sidebar user panel -->

        <div class="user-panel" style="text-align: center;margin-top: 15px">
            <img src="<?= Yii::getAlias('@home') ?>/images/adminlogo.jpg" style="width: 100%;height: 130px;opacity: 0.7"
                 class="img-thumbnail" alt="">
        </div>
        <hr style="margin-top: 3px">


        <!-- /.search form -->
        <?php
            if (Yii::$app->getUser()->identity->role == 3 ) {
                ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => "Avtoreferat", 'icon' => 'file', 'url' => ['/avtoreferat/index'],],

                ],
            ]
        ) ?>
        <?php } else { ?>
        <?php if (Yii::$app->getUser()->identity->role == 1){ ?>
            <?= Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/site/index'],],
                        ['label' => 'Tuzilma',
                            'icon' => 'cubes',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Universitet haqida', 'icon' => 'bank', 'url' => ['/about/update?id=1'],],
                                ['label' => 'Universitet nizomi', 'icon' => 'flag', 'url' => ['/about/update?id=2'],],
                                ['label' => 'Rektorat', 'icon' => 'address-card-o', 'url' => ['/rectorate/index']],
                                ['label' => 'Fakultetlar', 'icon' => 'address-card-o', 'url' => ['/center?CenterSearch%5Bname_uz%5D=&CenterSearch%5Bcontent_uz%5D=&CenterSearch%5Bcate%5D=1&CenterSearch%5Bname_ru%5D=&CenterSearch%5Bname_en%5D=']],
                                ['label' => 'Kafedralar', 'icon' => 'address-card-o', 'url' => ['/center?CenterSearch%5Bname_uz%5D=&CenterSearch%5Bcontent_uz%5D=&CenterSearch%5Bcate%5D=2&CenterSearch%5Bname_ru%5D=&CenterSearch%5Bname_en%5D=']],
                                ['label' => "Markazlar va bo'limlar", 'icon' => 'address-card-o', 'url' => ['/center?CenterSearch%5Bname_uz%5D=&CenterSearch%5Bcontent_uz%5D=&CenterSearch%5Bcate%5D=3&CenterSearch%5Bname_ru%5D=&CenterSearch%5Bname_en%5D=']],
                            ],
                        ],
                        ['label' => 'Sahifalar', 'icon' => 'bar-chart', 'url' => ['all-action/index']],
                        ['label' => 'Abiturent',
                            'icon' => 'cubes',
                            'url' => '#',
                            'items' => [
                                ['label' => "Magistratura eslatma", 'icon' => 'cube', 'url' => ['all-action/update?id=32'],],
                                ['label' => "Magistr qabul nizomi", 'icon' => 'cube', 'url' => ['all-action/update?id=35'],],
                                ['label' => "Magistr qabul kvotasi", 'icon' => 'cube', 'url' => ['all-action/update?id=36'],],
                                ['label' => "Magistr qabulga xujjati", 'icon' => 'cube', 'url' => ['all-action/update?id=37'],],
                                ['label' => "Magistr imtihon fanlar", 'icon' => 'cube', 'url' => ['all-action/update?id=39'],],
                                ['label' => "Magistr monitoring", 'icon' => 'cube', 'url' => ['all-action/update?id=41'],],
                                ['label' => "Magistr kamisiya joyi", 'icon' => 'cube', 'url' => ['all-action/update?id=43'],],
                                ['label' => "Magistr savollar", 'icon' => 'cube', 'url' => ['all-action/update?id=45'],],
                                ['label' => "Bakalavr eslatma", 'icon' => 'cube', 'url' => ['all-action/update?id=27'],],
                                ['label' => "Bakalovr qabul kvotasi", 'icon' => 'cube', 'url' => ['all-action/update?id=34'],],
                                ['label' => "Bakalovr qabul nizomi", 'icon' => 'cube', 'url' => ['all-action/update?id=33'],],
                                ['label' => "Bakalovr qabulga xujjati", 'icon' => 'cube', 'url' => ['all-action/update?id=38'],],
                                ['label' => "Bakalovr imtihon fanlar", 'icon' => 'cube', 'url' => ['all-action/update?id=40'],],
                                ['label' => "Bakalovr monitoring", 'icon' => 'cube', 'url' => ['all-action/update?id=42'],],
                                ['label' => "Bakalovr kamisiya joyi", 'icon' => 'cube', 'url' => ['all-action/update?id=44'],],
                            ],
                        ],
                        ['label' => 'Talaba',
                            'icon' => 'user-circle-o',
                            'url' => '#',
                            'items' => [
                                ['label' => "Magistratura yo'riqnoma", 'icon' => 'user-circle-o', 'url' => ['all-action/update?id=30'],],
                                ['label' => "Bakalavr yo'riqnoma", 'icon' => 'user-circle-o', 'url' => ['all-action/update?id=31'],],

                            ],
                        ],
                        ['label' => 'Xorijiy talabalar',
                            'icon' => 'life-ring',
                            'url' => '#',
                            'items' => [
                                ['label' => "Xorijiy talabalar", 'icon' => 'life-ring', 'url' => ['all-action/update?id=29'],],
                                ['label' => "Talabalar kontrakti", 'icon' => 'life-ring', 'url' => ['all-action/update?id=48'],],
                                ['label' => "Talabalar xavsizligi", 'icon' => 'life-ring', 'url' => ['all-action/update?id=49'],],
                                ['label' => "Talabalar yotoqxonasi", 'icon' => 'life-ring', 'url' => ['all-action/update?id=50'],],

                            ],
                        ],

                        ['label' => 'Yangiliklar', 'icon' => 'bell', 'url' => ['news/index']],
                        ['label' => "E'lonlar", 'icon' => 'bullhorn', 'url' => ['events/index']],
                        ['label' => 'Fotolavhalar', 'icon' => 'photo', 'url' => ['galery/index']],
                        ['label' => 'Foydalanuvchilar', 'icon' => 'user', 'url' => ['user/index']],
                        ['label' => 'Avtoreferat', 'icon' => 'user', 'url' => ['avtoreferat/index']],

                    ],
                ]
            ) ?>
        <?php }
        else{

        if (Yii::$app->getUser()->identity->cate == 1 || Yii::$app->getUser()->identity->cate == 2) {
            ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => "Bizning to'liq ma'lumotimiz", 'icon' => 'home', 'url' => ['/center-page/index'],],

                        ['label' => 'Hodimlar', 'icon' => 'bar-chart', 'url' => ['/hodim/index']],
                        ['label' => 'Yangiliklar', 'icon' => 'bell', 'url' => ['news/index']],
                        ['label' => "E'lonlar", 'icon' => 'bullhorn', 'url' => ['events/index']],
                        ['label' => "Ilmiy ishlar", 'icon' => 'file', 'url' => ['hodim/publications']],


                    ],
                ]
            ) ?>

            <?php }
//        if ($main->isAvtoref()){
//            dmstr\widgets\Menu::widget(
//                [
//                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
//                    'items' => [
//                        ['label' => "Avtoreferat", 'icon' => 'file', 'url' => ['avtopreferat/index']],
//                    ],
//                ]
//            );
//        }
        if (Yii::$app->getUser()->identity->cate == 2) {

            echo Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [

                        ['label' => "Dars jadval", 'icon' => 'calendar', 'url' => ['dars-jadval/index']],

                    ],
                ]
            );

        }
            if (Yii::$app->getUser()->getIdentity()->getId() == 85) {

                echo Menu::widget(
                    [
                        'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                        'items' => [

                            ['label' => "Iqtidorli Talabalar", 'icon' => 'bell', 'url' => ['/news/honorable ']],

                        ],
                    ]
                );

            }

        if (Yii::$app->getUser()->identity->cate == 3) { ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => "Bizning to'liq ma'lumotimiz", 'icon' => 'home', 'url' => ['/center-page/index'],],

                        ['label' => 'Hodimlar', 'icon' => 'bar-chart', 'url' => ['/hodim/index']],


                    ],
                ]
            ) ?>

        <?php }}} ?>

    </section>

</aside>
