<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class Item extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'items';
    }

    public function rules(){
        return [
            [['name'], 'required'],
            [['responsible_id'], 'safe'],
            [['name', 'serial', 'inventory_number', 'location'], 'string', 'max' => 255]
        ];
    }

    public function getResponsible() {
        return $this->hasOne(Worker::className(), ['id' => 'responsible_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'location' => 'Расположение',
            'inventory_number' => 'Инвентарный номер',
            'serial' => 'Заводской номер',
            'responsible.fio' => 'Ответственный',
        ];
    }

    public function getResponsibleUrl(){
        return Html::a($this->responsible->fio, Url::toRoute(['/workers/view', 'id' => $this->responsible_id]));
    }
}
