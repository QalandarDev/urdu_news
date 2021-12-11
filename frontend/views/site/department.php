<?php

use yii\helpers\ArrayHelper;

/* @var $this \yii\web\View */
/* @var $home string */
$titlepage = Yii::t('app','Urgench State University');
$this->title = $titlepage;
$titlelang = Yii::t('app','Departments');

?>
<!-- team-area start -->
<?php
$model = ArrayHelper::index($model, null, 'fak_id');
$fakultet = ArrayHelper::map($fakultet, 'id', $name);
//print_r($fakultet);


?>

<section class="">
    <div class="col-md-12">
        <div class="row">
            <div class="page-header" style="margin-top:-10px"><h2 class="h1-text"><?= $titlelang ?></h2></div>
            <?php foreach ($model as $key => $value) { ?>
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active "
                                           style="text-transform: uppercase; color:#ffffff">
                        <?= $fakultet[$key]; ?> </p>
                    <?php foreach ($value as $item) { ?>
                        <a class="list-group-item list-group-item-action "
                           style="text-transform: uppercase; color:#337ab7;"
                           href="<?= \yii\helpers\Url::to(['/site/departmentview?id=' . $item['id']]) ?>">
                            <?= $item[$name] ?> </a>
                    <?php }; ?>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>

<!-- team-area end -->
