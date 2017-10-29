<?php

namespace app\models;

use Yii;


class Worker extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'workers';
    }


    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['chief_id'], 'safe'],
            [['fio', 'room', 'position'], 'string', 'max' => 255]
        ];
    }

    public function getChief() {
        return $this->hasOne(Worker::className(), ['id' => 'chief_id']);
    }

    public function getItems() {
        return $this->hasMany(Item::className(), ['responsible_id' => 'id']);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'room' => 'Помещение',
            'position' => 'Должность',
            'chief.fio' => 'Начальник',
        ];
    }
}
