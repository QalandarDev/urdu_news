<?php
/**
 * @var $department Center
 */

use backend\models\Center;
use yii\helpers\Url;

?>
<div class="col-lg-4 col-md-12 pr-50 md-pr-15">
    <div class="widget-area">
        <div class="widget-archives mb-50">
            <h3 class="widget-title"><?= $department->name ?></h3>
            <ul>
                <li>
                    <a href="<?= Url::to(['department/view', 'id' => $department->id]) ?>">
                        <?= Yii::t('news', 'Employees') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['department/about', 'id' => $department->id]) ?>">
                        <?= Yii::t('news', 'About Department') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['department/news', 'id' => $department->id]) ?>">
                        <?= Yii::t('news', 'News') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['department/scientific', 'id' => $department->id]) ?>">
                        <?= Yii::t('news', 'Scientific works') ?>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
