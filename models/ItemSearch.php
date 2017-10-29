<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query;

class ItemSearch extends Item
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'inventory_number', 'location', 'serial', 'responsible.fio'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function attributes() {
        return array_merge(parent::attributes(), ['responsible.fio']);
    }


    public function search($params)
    {
        $query = Item::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $query->joinWith(['responsible' => function($query) { $query->from(['responsible' => 'workers']); }]);
        $dataProvider->sort->attributes['responsible.fio'] = [
            'asc' => ['responsible.fio' => SORT_ASC],
            'desc' => ['responsible.fio' => SORT_DESC],
        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['LIKE', 'responsible.fio', $this->getAttribute('responsible.fio')]);
        $query->andFilterWhere(['items.id' => $this->id]);
        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['like', 'location', $this->location]);
        $query->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'inventory_number', $this->inventory_number]);

        return $dataProvider;
    }
}
