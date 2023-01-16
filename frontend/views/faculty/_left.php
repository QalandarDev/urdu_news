<?php
/**
 * @var $faculty Faculty
 */

use frontend\models\Faculty;
use yii\helpers\Url;

?>
<div class="col-lg-4 col-md-12 pr-50 md-pr-15">
    <div class="widget-area">
        <div class="widget-archives mb-50">
            <h3 class="widget-title"><?= $faculty->name ?></h3>
            <ul>
                <li>
                    <a href="<?= Url::to(['faculty/view', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', 'Employees') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/about', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', 'About Faculty') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/news', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', 'News') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/communication', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', "Faculty Communications") ?>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['faculty/scientific', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', "Scientific council of the faculty") ?>
                    </a>
                </li><li>
                    <a href="<?= Url::to(['faculty/grants', 'id' => $faculty->id]) ?>">
                        <?= Yii::t('news', "Faculty Grants") ?>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
