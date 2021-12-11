<?php

use backend\components\View;
use yii\helpers\Html;

/* @var $this View */
?>
<header class="main-header" style="background-color: rgba(83, 123, 188, 0.4)">

    <nav class="navbar navbar-static-top" style="background-color: rgba(83, 123, 188, 0.4)" role="navigation">
        <!-- User Account: style can be found in dropdown.less -->

        <div class="pull-right" style="margin: 10px 10px 10px 10px ">
            <a href="https://kril-lotin.urdu.uz" class="btn btn-danger btn-flat">Agar ma'lumot kril bo'lsa buni
                bosing...</a>
            <?= Html::a(
                'CHIQISH',
                ['/site/logout'],
                ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat']
            ) ?>
        </div>
        <!--        <div class="pull-right" style="margin: 10px 10px 10px 10px ">-->

        <!--        </div>-->

    </nav>
</header>
