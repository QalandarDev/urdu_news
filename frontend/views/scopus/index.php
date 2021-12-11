<style>
	.elsevier-rss-portlet h4{
		text-transform: uppercase;
		padding: 2em 0 3em !important;
		border-bottom: 1px solid #eee;
}
	.elsevier-rss-list li{
		border-bottom: 1px solid #eee;
	}
	
	.elsevier-rss-list li:hover{
	background-color: #eee;
}

	
	
	.resultsExternal {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
	.resultsExternal span{
	color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
		padding: 2px;
}


	</style>
<?php

use yii\widgets\Breadcrumbs;


$this->title=Yii::t('app','Urgench State University')."-".Yii::t('app','Scopus');

$this->params['breadcrumbs'][] = Yii::t('app','Scopus');
?>



	<?=Breadcrumbs::widget([
    'homeLink'=>['label'=>Yii::t('yii','Home'), 'url'=>'https://urdu.uz',  ],
    'links'=>isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs']:[],
    ]);  
    ?> 
<div class="page-header"><h2 class="h1-text"><?=Yii::t('app','Scopus')?></h2></div>

	
	<div class='col-md-9'>
<script src="https://syndic8.scopus.com/getMessage?registrationId=IGCJJIJJIGCJIGCKKGEJIMDLJGHKMJKPRMFJNOILRX"></script>
		</div>


	