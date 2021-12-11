<?php


namespace backend\controllers;


use common\models\User;
use Throwable;
use Yii;
use yii\web\Controller;
use yii\web\IdentityInterface;
use yii\web\Response;

class BackendController extends Controller
{
    /**
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {

        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->getUser()->getIsGuest()) {
            return $this->redirect(['site/login']);
        }
        return true;

    }

    /**
     * @var User|IdentityInterface|null
     */
    private $_user;

    /**
     *
     * @return  User|IdentityInterface|Response
     * @throws Throwable
     */
    public function _user()
    {
        if (!Yii::$app->getUser()->getIsGuest() && !$this->_user) {
            $this->_user = Yii::$app->getUser()->getIdentity();
            if ($this->_user === null) {
                Yii::$app->getUser()->logout();
                return $this->goHome();
            }
        }
        return $this->_user;
    }
}
