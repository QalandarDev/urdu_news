<?php


namespace backend\models;


use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;

class Edu extends ActiveRecord
{
    public $department;
    public $group;
    public $course;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department', 'group','course'], 'integer'],
        ];
    }

    public function listGroup()
    {
        $client = new Client();
        $data = [];
        if ($this->department && $this->course) {
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://talim.urdu.uz/api/groups?dep='.$this->department.'&level='.$this->course)
                ->send();
            if ($response->getIsOk()) {
                $data = $response->getData();
                return ArrayHelper::map($data, 'id', 'name');
            }
        }
        return $data;
    }
    public function listMschedule()
    {
        $client = new Client();
        $data = [];
        if ($this->course) {
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://talim.urdu.uz/api/groups?dep=76&level='.$this->course)
                ->send();
            if ($response->getIsOk()) {
                $data = $response->getData();
                return ArrayHelper::map($data, 'id', 'name');
            }
        }
        return $data;
    }
}