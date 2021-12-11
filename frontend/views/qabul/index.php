<?php
/**
 * @var $this \yii\web\View
 */
?>
<div class="container">

    <style>
        .wrap > .container {
            padding-top: 10px;
        }

        .table > thead > tr > th {
            vertical-align: center !important;
        }

        .form-group {
            margin-bottom: 0
        }

        .select2-container--default .select2-selection--single {
            border-radius: 2px;
        }

        .select2-container .select2-selection--single {
            height: 35px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 30px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px;
        }

        .r_table {
            border: 0 solid black !important;
            text-align: center;
            vertical-align: middle;
        }

    </style>

    <div class="panel" style="">
        <div class="panel-body" style="text-align: center;color: darkblue; font-size: 18px;">
            <div class="col-sm-8" data-select2-id="9">
                <div class="form-group" data-select2-id="107">
                    <select class="form-control lang_select select2-hidden-accessible" data-select2-id="4" tabindex="-1"
                            aria-hidden="true">
                        <option data-select2-id="105">Tilni tanlang</option>
                        <option value="1" data-select2-id="109">O'zbekcha</option>
                        <option value="2" data-select2-id="110">Ruscha</option>
                    </select>

                </div>
            </div>
            <div class="col-sm-4">
                <h5>Manba: <a href="http://qabul.dtm.uz/" target="_blank"><h5>qabul.dtm.uz</h5></a></h5>
            </div>

        </div>
    </div>

    <div class="panel" style="margin-bottom: 0px;">
        <div class="panel-heading">
            <div class="col-lg-12" style="font-size: 16px;">
                <div id="day_header">

                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive" id="day_row">

            </div>
        </div>
<!--            <div id="print" class="print-invoys pull-left " style="padding: 15px;display: none">-->
<!--                <button class="btn btn-success" onclick='window.print();'><i class="fa fa-print"></i> Chiqarish</button>-->
<!--            </div>-->
    </div>

</div>
<?php
$url = \yii\helpers\Url::to(['qabul/qabuldtm']);
$js = <<<JS
   var lang = [];
    lang[1] = 'O\'zbekcha';
    lang[2] = 'Ruscha';
    lang[3] = 'Qoraqalpoqcha';
    lang[4] = 'Tojikcha';
    lang[5] = 'Qozoqcha';
    lang[6] = 'Turkmancha';
    lang[7] = 'Qirgizcha';
    var emode = [];
    emode[1] = 'Kunduzgi';
    emode[4] = 'Kechgi';
    emode[3] = 'Sirtqi';
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes();
    today = '21.07.2020';

    // console.log(today);
                var grand=0;
                    var kontrakt=0;
                    var soni=0;
                    var data=0;
                    var umumiy=0;
     $(document).ready(function() {
           var uncode = 341;
           var name = "Urganch davlat universiteti";
           var sel_lang = 1;
           var lang_name = "O'zbekcha";
             $.getJSON(`{$url}`, function(result){
                       // result=JSON.parse(result);
                     data = result;
                     var html = "";
                    var table = "";
                    $( "#day_row" ).html('');
                // var toption = $(this).find('option:selected');
                var data1=data;
                 $.each(data1, function(key, val1){
                    $.each(val1,function(key1, val) {
                      $.each(val,function(k,v) {
                        umumiy+=set_t2(v['all']);
                      });
                    });
                });
                   table+='<h2>Jami kelib tushgan arizalar soni: '+ umumiy+'</h2>';
                table += '<table class="table table-bordered header-fixed" style="text-align:center;"> ' +
                    '<thead>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" colspan="8">' +
                    '2020-2021-oʻquv yilida <span class="text-uppercase"> '+ name +'</span>ning bakalavriat taʼlim yoʻnalishlariga abituriyentlardan tushgan arizalar haqida</th></tr>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" colspan="8">' +
                    'MAʼLUMOT</th></tr>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" style="text-align: right;" colspan="8">Ta\'lim tili: '+ lang_name +'</th></tr>' +
                    '<th class="r_table" style="text-align: right;" colspan="8">' + today + ' holatiga</th></tr>' +

                    '<tr><th class="text-center" style="vertical-align: middle; !important;" rowspan="2">Yo\'nalish nomi</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" rowspan="2">Yo\'nalish kodi</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" colspan="2">Qabul reja</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" colspan="4">Qabul 2020</th></tr>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Grant</td>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Kontrakt</td>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Ta\'lim yo\'nalishini tanlaganlar soni</td>' +
                    '<th class="text-center" style="vertical-align: middle; !important;"><u>Tanlov</u></th></tr>' +
                    '</thead><tbody>';

                $.each(data[sel_lang], function(key, val){

                    table += '<tr><th colspan="8" class="text-center">Ta\'lim shakli: '+ emode[key] +'</th></tr>';
                    grand=0;
                    kontrakt=0;
                    soni=0;

                    $.each(val, function(k, v){
                        if(!v['name'])return;
                        grand+=set_t2(v['g']);
                        kontrakt+=set_t2(v['k']);
                        soni+=set_t2(v['all']);
                        table +='<tr class="text-center">' +
                            '<td class="text-left" style="vertical-align: middle; !important;">' + v['name'] + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + v['mvdir'] + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['g']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['k']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['all']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' +
                            (set_t2(v['all']) / (set_t2(v['g']) + set_t2(v['k']))).toFixed(1) + '</td>' +
                            '</tr>';
                    });
                    table += '<tr><th colspan="2" class="text-center">Jami:</th>';

                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+grand+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+kontrakt+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+soni+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+
                    (soni / (grand + kontrakt)).toFixed(1)+'</td>';
                    table+='</tr>';
                });
                table += '</tbody></table>';
                $( "#day_row" ).html(table);
                $( "#print" ).show();
            });
     });



            $(".lang_select").change(function() {
                     var uncode = 341;
                 var name = "Urganch davlat universiteti";
                    var toption = $(this).find('option:selected');
                     var sel_lang = toption.val();
                    var lang_name = toption.text();

                     var html = "";
                    var table = "";
                    $( "#day_row" ).html('');

                // var toption = $(this).find('option:selected');
                table+='<h2>Jami kelib tushgan arizalar soni: '+ umumiy+'</h2>';
                table += '<table class="table table-bordered header-fixed" style="text-align:center;"> ' +
                    '<thead>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" colspan="8">' +
                    '2020-2021-oʻquv yilida <span class="text-uppercase"> '+ name +'</span>ning bakalavriat taʼlim yoʻnalishlariga abituriyentlardan tushgan arizalar haqida</th></tr>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" colspan="8">' +
                    'MAʼLUMOT</th></tr>' +
                    '<tr class="r_table">' +
                    '<th class="r_table" style="text-align: right;" colspan="8">Ta\'lim tili: '+ lang_name +'</th></tr>' +
                    '<th class="r_table" style="text-align: right;" colspan="8">' + today + ' holatiga</th></tr>' +

                    '<tr><th class="text-center" style="vertical-align: middle; !important;" rowspan="2">Yo\'nalish nomi</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" rowspan="2">Yo\'nalish kodi</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" colspan="2">Qabul reja</th>' +
                    '<th class="text-center" style="vertical-align: middle; !important;" colspan="4">Qabul 2020</th></tr>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Grant</td>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Kontrakt</td>' +
                    '<td class="text-center" style="vertical-align: middle; !important;" >Ta\'lim yo\'nalishini tanlaganlar soni</td>' +
                    '<th class="text-center" style="vertical-align: middle; !important;"><u>Tanlov</u></th></tr>' +
                    '</thead><tbody>';

                $.each(data[sel_lang], function(key, val){
                    table += '<tr><th colspan="8" class="text-center">Ta\'lim shakli: '+ emode[key] +'</th></tr>';
                     grand=0;
                     kontrakt=0;
                     soni=0;
                    $.each(val, function(k, v){
                        if(!v['name'])return;
                        grand+=set_t2(v['g']);
                        kontrakt+=set_t2(v['k']);
                        soni+=set_t2(v['all']);
                        table +='<tr class="text-center">' +
                            '<td class="text-left" style="vertical-align: middle; !important;">' + v['name'] + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + v['mvdir'] + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['g']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['k']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' + set_t(v['all']) + '</td>' +
                            '<td class="text-center" style="vertical-align: middle; !important;">' +
                            (set_t2(v['all']) / (set_t2(v['g']) + set_t2(v['k']))).toFixed(1) + '</td>' +
                            '</tr>';
                    });
                    table += '<tr><th colspan="2" class="text-center">Jami:</th>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+grand+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+kontrakt+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+soni+'</td>';
                    table+='<td class="text-center" style="vertical-align: middle; !important;">'+
                    (soni / (grand + kontrakt)).toFixed(1)+'</td>';
                    table+='</tr>';
                });
                table += '</tbody></table>';
                $( "#day_row" ).html(table);
                $( "#print" ).show();
        });
    function set_t(i,j=0) {
        if(!i || j == 777)
            return '-'
        else return i
    }
    function set_t2(i) {
        if(!i)return 0
        else return parseInt(i)
    }
JS;
$this->registerJs($js);
?>
