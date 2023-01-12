<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(__DIR__, 2) . '/frontend');
Yii::setAlias('@uploads', dirname(__DIR__, 2) . '/frontend/web');
Yii::setAlias('@public', dirname(__DIR__, 2) . '/public');
Yii::setAlias('@app', dirname(__DIR__, 2) . '/');
Yii::setAlias('@backend', dirname(__DIR__, 2) . '/backend');
Yii::setAlias('@console', dirname(__DIR__, 2) . '/console');
Yii::setAlias('@node', dirname(__DIR__, 2) . '/node_modules');
Yii::setAlias('@home', 'https://urdu.uz');


use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd(...$vars): void
{
    \yii\helpers\VarDumper::dump($vars, 10, true);
    exit();
}
