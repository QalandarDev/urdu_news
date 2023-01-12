<?php

/* @var $faculties \backend\models\Center[] */
/* @var $faculty \backend\models\Center */
/* @var $departments \backend\models\Center[] */
/* @var $department \backend\models\Center */
/* @var $this \yii\web\View */
$counter = 0;

use yii\helpers\Url;

?>
<div class="rs-faq-part pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="content-part mb-50 md-mb-30">
            <div class="title mb-40 md-mb-15">
                <div class="h2 text-primary text-center"><?= Yii::t('news', "Departments") ?></div>
            </div>
            <div id="accordion" class="accordion">
                <div class="row">
                    <div class="col-md-6 pt-15">
                        <?php foreach ($faculties as $faculty): $counter++; ?>
                        <?php if ($counter % 7 === 0): ?>
                    </div>
                    <div class="col-md-6 pt-15">
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse"
                                   href="#collapse_<?= $faculty->id ?>"
                                   aria-expanded="false">
                                    <?= $faculty->name ?>
                                </a>
                            </div>
                            <div id="collapse_<?= $faculty->id ?>" class="collapse" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <ul>
                                        <?php foreach ($departments as $department): ?>
                                            <?php if ($department->fak_id === $faculty->id): ?>
                                                <li>
                                                    <i class="fad fa-long-arrow-right"></i>
                                                    <a href="<?= Url::to(['department/view', 'id' => $department->id]) ?>">
                                                        <?= $department->name ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
