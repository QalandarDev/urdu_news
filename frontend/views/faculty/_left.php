<?php
/**
 * @var $center Center
 */

use backend\models\Center;
use yii\helpers\Url;

?>
<div class="col-lg-4 col-md-12 pr-50 md-pr-15">
    <div class="widget-area">
        <div class="widget-archives mb-50">
            <h3 class="widget-title"><?= $center->name ?></h3>
            <ul>
                <li>
                    <a href="<?= Url::to(['faculty/view', 'id' => $center->id]) ?>">
                        <?= Yii::t('news', 'Employees') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/about', 'id' => $center->id]) ?>">
                        <?= Yii::t('news', 'About Faculty') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/news', 'id' => $center->id]) ?>">
                        <?= Yii::t('news', 'News') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/open', 'id' => $center->id]) ?>">
                        <?= Yii::t('news', 'Open Data') ?>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
