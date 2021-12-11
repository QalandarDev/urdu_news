<?php

namespace backend\components;

use common\components\View as CommonView;
use common\models\User;
use yii\web\IdentityInterface;
use yii\web\Response;

class View extends \yii\web\View
{
    /**
     * @return  User|IdentityInterface|Response
     */
    public function _user()
    {
        return $this->context->_user();
    }
}
