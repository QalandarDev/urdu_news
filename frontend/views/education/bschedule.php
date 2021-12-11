<?php


/* @var $this \yii\web\View */

/* @var $home bool|string */

/* @var $model \backend\models\Edu*/

/* @var $data array */

use kartik\depdrop\DepDrop;
use kartik\tabs\TabsX;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use frontend\widgets\Masofaviy_menu;

$this->title = Yii::t('app', 'Urgench State University');

$this->params['breadcrumbs'][] = Yii::t('app', "Students");
$this->params['breadcrumbs'][] = Yii::t('app', "Bakalavriyat");
$this->params['breadcrumbs'][] = Yii::t('app', "Dars jadvallari");

?>

    <section class="container">
        <div class="row">
            <div class="col-md-9">

                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-4">
                    <?= $form->field($model, 'department')->dropdownList([
                        '1' => 'Bioinjeneriya va oziq-ovqat xavfsizligi fakulteti',
                        '12' => 'Filologiya fakulteti',
                        '2' => 'Fizika-matematika fakulteti',
                        '3' => 'Jismoniy madaniyat fakulteti',
                        '4' => 'Kimyoviy texnologiyalar fakulteti',
                        '5' => 'Pedagogika fakulteti',
                        '6' => 'San\'atshunoslik fakulteti',
                        '7' => 'Tabiiy fanlar fakulteti',
                        '8' => 'Tarix fakulteti',
                        '9' => 'Texnika fakulteti',
                        '10' => 'Iqtisodiyot fakulteti',
                        '11' => 'Xorijiy filologiya fakulteti',
                        '77' => 'Sirtqi bo\'lim',
                    ], ['id' => 'cat-id', 'prompt' => '-- Fakultet Tanlash --'])->label(false) ?>
                </div>
                <div class="col-md-4">
                    <?=
                    $form->field($model, 'course')->dropdownList([
                        '11' => '1 - kurs',
                        '12' => '2 - kurs',
                        '13' => '3 - kurs',
                        '14' => '4 - kurs',
                        '15' => '5 - kurs',
                    ],
                        [
                            'prompt' => '--Kurs Tanlash--',
                            'id' => 'course-id'
                        ]
                    )->label(false);
                    ?>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10">
                            <?= $form->field($model, 'group')->widget(DepDrop::class, [
                                'options' => ['id' => 'subcat-id'],
                                'data' => $model->listGroup(),
                                'pluginOptions' => [
                                    'depends' => ['cat-id','course-id'],
                                    'placeholder' => '-- Guruh Tanlash --',
                                    'url' => Url::to(['/education/subcat'])
                                ]
                            ])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= Html::submitButton("Jo'natish", ['class' => 'btn btn-primary', 'disabled' => true, 'id' => 'submit1']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
                <?php if (is_array($data) && !empty($data)) {
                    foreach ($data as $datum) {
//                        VarDumper::dump($datum,10,true);
                        echo "<h3 style='text-align: center'>{$datum['name']}</h3>";
                        $ok = true;
                        $content = [];
                        foreach ($datum as $w => $value) {
                            if (is_array($value)) {
                                $html = "<table class='table table-bordered'>";
                                foreach ($value as $key => $dates) {
                                    $s = '';
                                    $cnt = 0;
                                    if ($key == date('Y-m-d')){
                                        foreach ($dates as $i => $item) {
                                            $s.= "<tr class='bg-primary'><td rowspan=".count($item)." style='vertical-align: middle;text-align: center'>".$i."</td>";
                                            foreach ($item as $subject) {
//                                            VarDumper::dump($key,10,true);
//                                            exit();
                                                $s .= "<td class='bg-primary'>" . $subject['trainingType'] . ': ' . $subject['name'] . " <br><sub><b>O'qituvchi</b>: {$subject['employee']}</sub></td><td class='bg-primary' style='text-align: center;vertical-align: middle'>{$subject['auditorium']}</td></tr>";
                                                ++$cnt;
                                            }
//                                           $s .= "</tr>";
                                        }
                                        $cnt++;
                                        $html .= "<tr class='bg-primary'><td style='vertical-align: middle;text-align: center' rowspan='{$cnt}'>".Yii::t('app',date('l',strtotime($key)))."<br><sub><b>".($key)."</b></sub></td></tr>";
                                        $html .= $s;
                                    }
                                    else{
                                        foreach ($dates as $i => $item) {
                                            $s.= "<tr><td rowspan=".count($item)." style='vertical-align: middle;text-align: center'>".$i."</td>";
                                            foreach ($item as $subject) {
//                                            VarDumper::dump($key,10,true);
//                                            exit();
                                                $s .= "<td>" . $subject['trainingType'] . ': ' . $subject['name'] . " <br><sub><b>O'qituvchi</b>: {$subject['employee']}</sub></td><td style='text-align: center;vertical-align: middle'>{$subject['auditorium']}</td></tr>";
                                                ++$cnt;
                                            }
                                        }
                                        $cnt++;
                                        $html .= "<tr><td style='vertical-align: middle;text-align: center' rowspan='{$cnt}'>".Yii::t('app',date('l',strtotime($key)))."<br><sub><b>".($key)."</b></sub></td></tr>";
                                        $html .= $s;
                                    }
                                }
                                $html .= "</table>";
                                $content [] = [
                                    'label' => $w == date('W',time()) ? 'Joriy Hafta':'Keyingi Hafta',
                                    'active' => $ok,
                                    'content' => $html
                                ];
                                $ok = false;
                            }

                        }
                    }

//                    echo $html;

                    echo TabsX::widget([
                        'items' => $content,
                        'position' => TabsX::POS_ABOVE,
                        'encodeLabels' => false
                    ]);
                } ?>

                <div class="header-bottom-right text-right" >
                    <a href="https://t.me/urdudarsjadvalibot" target="_blank" style="font-size: 2rem"><i class="fa fa-telegram">UrDU Dars Jadvali telegram botiga kirish</i></a>
                </div>
            </div>
        </div>

    </section>
<?php
$js = <<<JS
$('#subcat-id').change(function (){
    if ($(this).val()>0){
        $('#submit1').removeAttr('disabled');
    }else {
        $('#submit1').attr('disabled','disabled');
    }
});
JS;
$this->registerJs($js);