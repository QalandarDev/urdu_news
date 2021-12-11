<?php

use frontend\models\Mandat;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MandatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model Mandat [] */
/**
 * @var $shakli string
 * @var $tili string
 * @var $yunalish string
 * @var $yunalishlar []
 */
$this->title = 'Mandats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h2>Urganch davlat universiteti 2020-yil test sinovlari qaydnomasi
    </h2>


    <!--    --><?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php Pjax::begin([
        'submitEvent' => 'change',
    ]); ?>
    <div class="row">
        <?= Html::beginForm(['/mandat/index'], 'get',
            ['id' => 'mandat_id',
                'data-pjax' => 1,

            ]) ?>
        <div class="col-sm-3">
            <?= Html::dropDownList('shakli', [$shakli], [
                'Кундузги' => "Kunduzgi",
                'Сиртқи' => "Sirtqi",
            ], [
                'prompt' => '--Ta\'lim shakli--',
                'id' => 'shakli',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= Html::dropDownList('tili', [$tili], [
                'ўзбекча' => "O'zbekcha",
                'русча' => "Ruscha"
            ], [
                'prompt' => '--Ta\'lim tili--',
                'id' => 'tili',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= Html::dropDownList('yunalish', [$yunalish],
                $yunalishlar, [
                    'prompt' => '--Yo\'nalishni tanlang---',
                    'id' => 'yunalish',
                    'class' => 'form-control'
                ]) ?>
        </div>
        <div class="col-sm-3">
            <?= Html::submitButton("Ko'rish", ['class' => 'btn btn-primary']) ?>
        </div>

        <?= Html::endForm(); ?>
    </div>
    <br>
    <?php if (count($model) > 0): ?>

        <table class='table table-bordered table-hover table-striped'>
            <thead class="text-uppercase">
            <tr>
                <th>Abiturent F.I.SH.</th>
                <th>ID Raqami</th>
                <th>Umumiy Ball</th>
                <th><?= $model[0]['f1'] ?></th>
                <th><?= $model[0]['f2'] ?></th>
                <th>Ijodiy imtihon ball</th>
                <th>Q'shimcha imtiyoz ball</th>
            <tr>
            </thead>
            <tbody>
            <?php foreach ($model as $index => $item): ?>
                <?php if ($index === 0): ?>
                    <tr class="info">
                        <td colspan="7" class="text-center">
                            <b> <?= $item->AccName ?></b>
                        </td>
                    </tr>
                <?php elseif ($item->AccName != $model[$index - 1]['AccName']): ?>
                    <tr class="info">
                        <td colspan="7" class="text-center">
                            <b> <?= $item->AccName ?></b>
                        </td>
                    </tr>
                <?php endif; ?>
                <tr class="<?php if (strpos($item->AccName, "Давлат ") !== false) echo "success" ?>">
                    <td><?= $item->FISH ?></td>
                    <td><?= $item->SCode ?></td>
                    <td><?= number_format($item->NComBall, 1) ?></td>
                    <td><?= number_format($item->NBall1, 1) ?></td>
                    <td><?= number_format($item->NBall2, 1) ?></td>
                    <td><?= number_format($item->NTvorec, 1) ?></td>
                    <td><?= number_format($item->NLgotBall, 1) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>

        <p class="well">
            <b>Natijani ko'rish uchun ta'lim shakli, ta'lim tili va yo'nalishni tanlang</b>
        </p>
    <?php endif; ?>
    <hr>
    <p>
    <h3>
        <a class="h3" href="http://test2020.urdu.uz" target="_blank">
            Barcha ijodiy imtihon YAKUNIY qaydnomalarini ko'rish
            <i class="fa fa-download"></i>
        </a>
    </h3>
    <hr>
    <h4>
        <a class="h4" href="http://test2020.urdu.uz" target="_blank">
            Barcha test sinov qaydnomalarini ko'rish
            <i class="fa fa-download"></i>
        </a>
    </h4>

    </p>
    <hr>
    <?php Pjax::end() ?>
	<p align="center"><span style="font-family: 'Times New Roman', serif;"><span lang="uz-Cyrl-UZ"><h3 class="text-center">Хужжатларни расмийлаштириш ва тўлов-контракт масалаларида мурожаат қилиш учун масъуллар </h3></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><span lang="uz-Cyrl-UZ"><strong>РЎЙХАТИ</strong></span></span></span></p>
<table class="table table-bordered">
<tbody>
<tr valign="top">
<td style="background: #c6d9f1;" rowspan="2" bgcolor="#c6d9f1" width="20">
<p>№</p>
</td>
<td style="background: #c6d9f1;" rowspan="2" bgcolor="#c6d9f1" width="260">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Таълим йўналиши шифри ва номи</strong></span></span></span></p>
</td>
<td style="background: #c6d9f1;" rowspan="2" bgcolor="#c6d9f1" width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Масъул проф-ўқитувчи Ф.И.О.</strong></span></span></span></p>
</td>
<td style="background: #c6d9f1;" rowspan="2" bgcolor="#c6d9f1" width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Иш жойи (кафедра)</strong></span></span></span></p>
</td>
<td style="background: #c6d9f1;" rowspan="2" bgcolor="#c6d9f1" width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Телефон номери</strong></span></span></span></p>
</td>
<td style="background: #c6d9f1;" colspan="2" bgcolor="#c6d9f1" width="273">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Ҳужжат қабул қилиш </strong></span></span></span></p>
</td>
</tr>
<tr valign="top">
<td style="background: #c6d9f1;" bgcolor="#c6d9f1" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>факультет</strong></span></span></span></p>
</td>
<td style="background: #c6d9f1;" bgcolor="#c6d9f1" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>хона</strong></span></span></span></p>
</td>
</tr>
<tr>
<td style="background: #c6d9f1;" colspan="7" valign="top" bgcolor="#c6d9f1" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>1. Санъатшунослик факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Технологик таълим (кундузги ва сиртқи)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Эгамова Анбаржон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Технологик таълим кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">94-230-54-55</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 317</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тасвирий санъат ва мухандислик графикаси</span></span></span> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">(кундузги, сиртқи)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бекназаров Ш</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">амшир</span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тасвирий санъат ва мухандислик графикаси кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">91&nbsp;430 52 50</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 313</span></span></span></p>
</td>
</tr>
<tr>
<td width="20" height="53">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Амалий санъат (бадиий кулолчилик)</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">, </span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рангтасвир (дастгохли)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Атаева Н</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">аргиза</span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тасвирий санъат ва мухандислик графикаси кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">93&nbsp;759 07 43</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 318</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими йўналиши (кундузги)</span></span></span></p>
</td>
<td valign="top" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қазақов Адилбек</span></span></span></p>
</td>
<td valign="top" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими кафедраси катта ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99-942-59-11</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 316</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими йўналиши </span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>(</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">сиртқи</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>)</strong></span></span></span></p>
</td>
<td valign="top" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Абдримов Комилжон</span></span></span></p>
</td>
<td valign="top" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">9</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7&nbsp;510 97 87</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 303</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Маданият ва санъат муассасаларини ташкил этиш ҳамда бошқариш йўналиши (кундузги)</span></span></span></p>
</td>
<td valign="top" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Аманбаев Бахтиёр</span></span></span></p>
</td>
<td valign="top" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">9</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">9&nbsp;348 50 41</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 306</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7</span></span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Чолғу ижрочилиги (турлари бўйича) йўналиши (кундузги)</span></span></span></p>
</td>
<td valign="top" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жуманиёзов Умрбек</span></span></span></p>
</td>
<td valign="top" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">9</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">9&nbsp;942 12 17</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 312</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">8</span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Вокал санъати (турлари бўйича) йўналиши (кундузги)</span></span></span></p>
</td>
<td valign="top" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матякубов Эргаш </span></span></span></p>
</td>
<td valign="top" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мусиқа таълими кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">9</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7&nbsp;360 96 72</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Санъатшунослик</span></span></p>
</td>
<td valign="top" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Педагогика факультети биноси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> 311</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>2. Техника факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
<p lang="uz-Cyrl-UZ">&nbsp;</p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5310500</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Автомобилсозлик ва тракторсозлик</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Болтаев Арслон </span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Транспорт тизимлари</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">999685360</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5310600</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Транспорт воситалари муҳандислиги (турлари бўйича)</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рахимов Хурсанд Мадрахим ўғли</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Транспорт тизимлари</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937534640</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5310700</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Электр техникаси, электр механикаси ва электр технологиялари (тармоқлар бўйича)</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Эгамов Жўшқин Жуманазар ўғли</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Факультетлараро умумтехника фанлари</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">998834810</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5340100</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">- </span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Архитектура (турлари бўйича)</span></span></p>
</td>
<td width="140">
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рахимова Лалихон</span></span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Архитектура</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">977506594</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5340200</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Бино ва иншоотлар қурилиши (турлари бўйича)</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Наврўзов Шавкат Норматович</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Курилиш</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">912776699</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5340300-Шаҳар қурилиши ҳамда коммунал инфратузилмани ташкил этиш ва бошқариш</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Машарипов Шухрат </span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Курилиш</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">974533634</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5340500</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Қурилиш материаллари, буюмлари ва конструкцияларини ишлаб чиқариш</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бекчанов Хумоюн Мақсуд ўғли</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Курилиш</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">995590309</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Техника</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>3. </strong></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Табиий фанлар</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong> факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140100-Биология (турлари бўйича)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Нуруллаева Манзура </span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Биология</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">939221746</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 107-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140100-Биология (турлари бўйича) Сиртқи</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Эгамова Ойша</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Биология</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">914377705</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 107-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140600-География</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ганжаева Моможон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Геодезия, картография, география</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">914271521</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 105-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140600-География (сиртқи)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ганжаева Моможон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Геодезия, картография, география</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">914271521</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 105-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5311500-Геодезия, картография ва кадастр (функциялари бўйича)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қўчқарова Дилбар</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Геодезия, картография, география</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">997537507</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 105-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5311500-Геодезия, картография ва кадастр (функциялари бўйича) Сиртқи</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қўчқарова Дилбар</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Геодезия, картография, география</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">997537507</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 105-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">7</span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5630100- Экология ва атроф-муҳит муҳофазаси (тармоқлар ва соҳалар бўйича)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Пирова Мехрибон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Экология ва ҳаёт фаолияти ҳавсизлиги кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">995023446</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бош бино</span></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">118-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">8</span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140500-Кимё</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"> (турлари бўйича)</span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Яхшимуратов Муроджон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимё</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">996720713</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Табиий фанлар</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бош бино</span></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">116-хона</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>4. Биоинженерия ва озиқ овқат хавфсизлиги факультети</strong></span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5410500-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қишлоқ хўжалиги маҳсулотларини сақлаш ва кайта ишлаш технологияси</span></span></span></p>
</td>
<td rowspan="3" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матяқубов Мақсад Муратович</span></span></span></p>
</td>
<td rowspan="3" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қишлоқ хўжалиги махсулотларини сақлаш ва дастлабки қайта ишлаш технологияси</span></span></span></p>
</td>
<td rowspan="3" width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">99-967-95-98</span></span></p>
</td>
<td rowspan="3" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Биоинженерия ва ози</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">қ овқат хавфсизлиги</span></span></span></p>
</td>
<td rowspan="3" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 1-қават 112-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5411000-</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мевачилик ва узумчилик</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5411700-</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Иссиқхона хўжалигини ташкил этиш ва юритиш</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td valign="top" width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5320500</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Биотехнология</span></span></span></p>
</td>
<td rowspan="3" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бобожонова Хулкар Мадрахимовна</span></span></span></p>
</td>
<td rowspan="3" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Биотехнология</span></span></span></p>
</td>
<td rowspan="3" width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">91-430-30-08</span></span></p>
</td>
<td rowspan="3" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Биоинженерия ва ози</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">қ овқат хавфсизлиги</span></span></span></p>
</td>
<td rowspan="3" width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 1-қават 112-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5411100-</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Доривор </span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">ў</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">симликлар етиштириш ва кайта ишлаш технологияси</span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5411600</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Сабзавотчилик, полизчилик ва картошкачилик</span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5141000</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Тупрокшунослик</span></span></p>
</td>
<td rowspan="3" width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Полвонов Собиржон Олимович</span></span></span></p>
</td>
<td rowspan="3" width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тупроқшунослик ва агрономия</span></span></span></p>
</td>
<td rowspan="3" width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">97-510-25-89</span></span></p>
</td>
<td rowspan="3" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Биоинженерия ва ози</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">қ овқат хавфсизлиги</span></span></span></p>
</td>
<td rowspan="3" width="142">
<p align="center"><a name="_GoBack"></a> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика факультети биноси 1-қават 112-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">8</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5410216</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Агрономия (сабзавотчилик ва полизчилик) </span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">9</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5410300-</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ў</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">симликларни химоя килиш (экин турлари)</span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>5. </strong></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Физика &ndash; математика</strong></span></span></span> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>факультети</strong></span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">5130100</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-Математика</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хайтбаев Сабиржон Хамзаевич</span></span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Математик таҳлил</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">907375153</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика </span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">340</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5130200 - Амалий математика</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Якубов Ҳамдам Эргашович</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Амалий математика ва математик физика</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">995660347</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика </span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">331</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140200 &ndash; Физика</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Базарбоев Рустам Бахрамбоевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937542592</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">209</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5140300 &ndash; Механика ва математика моделлаштириш</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Абдикаримов Набижон Ибадуллаевич</span></span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Математик инжиниринг</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">939229388</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">327</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5130300 - Математик инжиниринг(йўналишлар бўйича </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Каримов Умид Улуғбекович</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Математик инжиниринг</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">975118467</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">327</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5330100- Компьютер илимлари ва дастурлаш технологиялари</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ҳажиев Умирбек Сабурязович</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ахборот технологиялари</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">975100359</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Физика &ndash; математика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">314</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>6. </strong></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>Жисмоний маданият</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong> факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5112000-Жисмоний маданият</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Саидназаров Улуғбек </span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жисмоний маданият назарияси ва методикаси кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">97211-92-28</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жисмоний маданият</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">110 хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5630535-Спорт фаолияти (хотин-қизлар спорти йўналиши) бўйича</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ядгарова Динора Баходировна</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Спорт фаолияти кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">93288</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">01</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">04</span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жисмоний маданият</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">110 хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5112000-Жисмоний маданият сиртқи бўлим</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Каримов Дониёр Комилович</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жисмоний маданият назарияси ва методикаси кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">94310-46-88</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жисмоний маданият</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">110 хона</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>7. Тарих факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">51</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="en-US">20400</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">-</span></span></span> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Археология</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хўжамуратов Умаржон Рустамович</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">94-230-73-38</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих факультети биноси 1-зал</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">51</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">20300- Тарих</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хасанов Мардон</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">97-453-6286</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих факультети биноси 1-зал </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5161100- Миллий ғоя маънавият асослари, ҳуқуқ таълими</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бекжонова Нилуфар</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Миллий ғоя маънавият асослари, ҳуқуқ таълими кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99-883-48-10</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Тарих факультети биноси 1-зал</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>8. Кимёвий технологиялар </strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong> факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5320400 Кимёвий технология</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (ишлаб чиқариш турлари бўйича)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Матяқубова</span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Каромат</span></span></p>
</td>
<td width="171">
<p>&ldquo;<span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технологиялар&rdquo; кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">94-230-74-75</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология факультети 201-хонаси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5320400 Кимёвий технология</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (ишлаб чиқариш турлари бўйича) сиртқи</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Атаева </span></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Фарида</span></span></span></p>
</td>
<td width="171">
<p>&ldquo;<span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технологиялар&rdquo; кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99-967-17-35</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология факультети 201-хонаси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5321500-Енгил саноат технологияси ва жиҳозлари (ишлаб чиқариш турлари бўйича)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Комилов</span></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ахматжон</span></span></span></p>
</td>
<td width="171">
<p>&ldquo;<span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технологиялар&rdquo; кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99-795-88-56</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология факультети 201-хонаси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">532</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">0900 Енгил саноат буйумлари конструкциясини ишлаш ва технологияси </span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">(</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">ишлаб чиқариш турлари бўйича)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Маматова</span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Сайяра</span></span></p>
</td>
<td width="171">
<p>&ldquo;<span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технологиялар&rdquo; кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">97-090-34-68</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология факультети 201-хонаси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">5321000 Озик овкат технологияси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (махсулот турлари бўйича)</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">)</span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Курёзов </span></span></span></p>
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Зарифбой</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Озик овкат технологияси</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">94-230-55-28</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Кимёвий технология факультети 101-хонаси</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>9. Педагогика</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong> факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111700-Бошланғич таълим (кундузги)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Сапаева Болжон Қадамовна</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бошланғич таълим методикаси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">932807381</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4 -кават 410 хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111700-Бошланғич таълим (сиртқи)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бекчанов Сардор</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бошланғич таълим методикаси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937426035</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4 -кават 410 хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111700-Бошланғич таълим (2-мутахассислик)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Пирметова Озода Сафарбоевна</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бошланғич таълим методикаси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">975272980</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4-қават 413 хона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111800-Мактабгача таълим (кундузги) </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Аллаберганова Адолат Атабековна </span></span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мактабгача таълим методикаси </span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">943131544</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4-қават 411 хона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111800-Мактабгача таълим (сиртқи) </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Абдуллаева Меҳрибон </span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мактабгача таълим методикаси </span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937430250</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4-қават 412 хона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111800-Мактабгача таълим (2-мутахассислик)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ўрозова Нафиса </span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Мактабгача таълим методикаси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937584188</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4-қават 412 хона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5110900-Педагогика ва психология (кундузги ва 2-мутахассислик) </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рахмедова Манзура</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика ва психология </span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">975153805</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4-қават 405 ҳона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">8</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5210203-Психология:амалий психология (кундузги) </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Исмоилова Асилпошша </span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Психология </span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">90 9063041</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3-қават 309 ҳона </span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">9</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5210203-Психология:амалий психология (сиртқи) </span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Собирова Каромат</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Психология </span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">942301666</span></span></span></p>
</td>
<td valign="top" width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Педагогика</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3-қават 309 ҳона</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>10. Туризм ва иқтисодиёт</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong> факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5610300-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Туризм (фаолият турлари бўйича)</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (кундузги, ўзбек)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рахимбоев Акмал Азатбаевич </span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">97 527 20 82</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.4-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5610300-</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Туризм (фаолият турлари бўйича)</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (кундузги, рус)</span></span></span></p>
</td>
<td width="140">
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Олланазаров Олланазар Норбек ўғли</span></span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">91 276 74 73</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5610300 - </span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Туризм (фаолият турлари бўйича)</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"> (сиртқи)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Шамуратов Собиржон Базарбаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99 108 92 77</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5610200 - Мехмонхона хўжалигини ташкил этиш ва бошқариш (кундузги)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Қурбонбоев Шухрат Бакберганович</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99 708 89 63</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5610200 - Мехмонхона хўжалигини ташкил этиш ва бошқариш (сиртқи)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Шамуратов Собиржон Базарбаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99 108 92 77</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">6</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Менежмент: туризм бизнесини бошқариш</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матниязов Муроджон Ражаббаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">97 510 38 39</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.4-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">7</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Менежмент: Маданий меросни бошқариш</span></span></span></p>
</td>
<td width="140">
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Олланазаров Олланазар Норбек ўғли</span></span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва мехмонхона хўжалигини бошқариш кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">91 276 74 73</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">8</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5230900- Бухгалтерия ҳисоби ва аудит</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Шеров Алишер Бакберганович</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бухгалтерия ҳисоби ва аудит кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99 834 35 33</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.4-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">9</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5230100 &ndash; Иқтисодиёт (кундузги, ўзбек)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ўразов Азамат Отабаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Иқтисодиёт кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">93 747 67 97</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.4-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">10</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5230100 &ndash; Иқтисодиёт (кундузги, рус)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ахмедов Шохжаҳон Кахраман ўғли</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Иқтисодиёт кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99 361 18 21</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">11</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5230100 &ndash; Иқтисодиёт (сиртқи)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ўразов Азамат Отабаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Иқтисодиёт кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">93 747 67 97</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.4-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">12</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5230400- Маркетинг</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матюсупов Бунёд Шерипбаевич</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Иқтисодиёт кафедраси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">93 647 99 11</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Туризм ва иқтисодиёт</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1.3-хона</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>11. </strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>Хорижий филология факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5120100-Филология ва тилларни ўқитиш (инглиз, немис, француз)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Жуманиёзов Хасанбек </span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Роман-герман филологияси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">937529320</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хоорижий филология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">430-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5111400-Хорижий тил ва адабиёти:инглиз тили, (рус гуруҳ)</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Каримова Муниса</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Инглиз тили ва адабиёти</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">995085521</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хорижий филология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">429-хона</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">3</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">5611501-Гид ҳамроҳлиги ва таржимонлик фаолияти: инглиз тили</span></span></span></p>
</td>
<td width="140">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матёқубов Жаҳонгир</span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Таржима назарияси ва амалиёти</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">974459950</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хорижий филология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">4</span></span></span></p>
</td>
<td width="260">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Таржима назарияси ва амалиёти</span></span></span></p>
</td>
<td width="140">
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Матёқубов Жаҳонгир</span></span></span></span></p>
</td>
<td width="171">
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Таржима назарияси ва малиёти</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">974459950</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Хорижий филология</span></span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Бинога кириш фойеси</span></span></span></p>
</td>
</tr>
<tr>
<td colspan="7" width="1032">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ"><strong>12. Ф</strong></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>илология</strong></span></span> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><strong>факультети</strong></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">1</span></span></span></p>
</td>
<td width="260">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Филология ва тилларни ўқитиш: ўзбек тили (Кундузги ва сиртқи)</span></span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Саиджанова Зебо</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ўзбек тили ва адабиёти кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">93-922-04-07</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ф</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">илология</span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">110</span></span></span></p>
</td>
</tr>
<tr>
<td width="20">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">2</span></span></span></p>
</td>
<td width="260">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Ўзга тилли гуруҳларда рус тили</span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">, </span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Филология ва тилларни ўқитиш: рус тили</span></span></p>
</td>
<td width="140">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Каримов Хикмат</span></span></span></p>
</td>
<td width="171">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Рус тили ва адабиёти кафедраси ўқитувчиси</span></span></span></p>
</td>
<td width="98">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">99-626-16-00</span></span></span></p>
</td>
<td width="117">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">Ф</span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">илология</span></span></p>
</td>
<td width="142">
<p align="center"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span lang="uz-Cyrl-UZ">108</span></span></span></p>
</td>
</tr>
</tbody>
</table>
<p><br /> </p>
</div>
