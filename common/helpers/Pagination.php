<?php


namespace common\helpers;


use yii\web\Request;
use Yii;

class Pagination extends \yii\data\Pagination
{
    protected function getQueryParam($name, $defaultValue = null)
    {

        if (!isset($this->params[$name]) || ($params = $this->params) === null) {
            $request = Yii::$app->getRequest();
            $params = $request instanceof Request ? $request->getQueryParams() : [];

        }

        return isset($params[$name]) && is_scalar($params[$name]) ? $params[$name] : $defaultValue;
    }
}
