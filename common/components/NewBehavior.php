<?php


namespace common\components;

use Yii;
use yii\base\Behavior;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;
use yii\helpers\Json;

class NewBehavior extends Behavior
{


    /** generate behavior on save or create model error reporting using Yii::error()*/
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_AFTER_INSERT => 'afterInsert',
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'beforeUpdate',
            BaseActiveRecord::EVENT_BEFORE_DELETE => 'beforeDelete',
        ];
    }

    public function afterInsert($event): void
    {
        $model = $this->owner;
        $comment = "✍️ ACTION::CREATE"
            . "\n\n 👤 USER: " . Yii::$app->user->id . " created " . $model::class . '[' . $model->primaryKey . ']'
            . "\n\n 📦 DATA " . $this->justifyModel($model->getAttributes())
            . "\n\n ⏰ AT " . date('Y-m-d H:i:s');
        $this->sendMessage($comment);
    }

    public function beforeUpdate($event): void
    {
        $model = $this->owner;
        $comment = "🔄ACTION::UPDATE"
            . "\n\n 👤 USER: " . Yii::$app->user->id . " updated " . $model::class . '[' . $model->primaryKey . ']'
            . "\n\n ⏩ SET " . $this->getChangedAttributes($model)
            . "\n\n ⏰ AT " . date('Y-m-d H:i:s');
        $this->sendMessage($comment);
    }

    public function beforeDelete($event): void
    {
        $model = $this->owner;
        $comment = "❌ ACTION::DELETE"
            . "\n\n 👤 USER: " . Yii::$app->user->id . " deleted " . $model::class . '[' . $model->primaryKey . ']'
            . "\n\n ⏰ DATA " . $this->justifyModel($model->getAttributes())
            . "\n\n ⏰ AT " . date('Y-m-d H:i:s');
        $this->sendMessage($comment);
    }

    protected function getChangedAttributes($model): string
    {
        $dirty = $model->getDirtyAttributes();
        if (strlen(Json::encode($dirty)) < 500) {
            $result = [];
            foreach ($dirty as $key => $value) {
                $result[] = $key . ' from ' . $model->getOldAttribute($key) . ' to ' . $value;
            }
            return implode("\n", $result);
        }
        return 'too long';

    }

    protected function justifyModel(array $data): string
    {
        $result = [];
        foreach ($data as $key => $value) {
            $value = strlen($value) > 27 ? substr($value, 0, 27) . '...' : $value;
            $result[] = $key . '=>' . $value;
        }
        return implode("\n", $result);
    }

    protected function sendMessage($message): void
    {
        if (strlen($message) > 4000) {
            $message = substr($message, 0, 3000) . '...';
        }
        Yii::$app->telegram->sendMessage([
            'chat_id' => '-763700888',
            'text' => $message,
        ]);
    }
}