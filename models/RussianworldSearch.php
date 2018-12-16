<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Russianworld;

/**
 * RussianworldSearch represents the model behind the search form of `app\models\Russianworld`.
 */
class RussianworldSearch extends Russianworld
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'level_high', 'id_groupworlds'], 'integer'],
            [['world', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Russianworld::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'level_high' => $this->level_high,
            'id_groupworlds' => $this->id_groupworlds,
        ]);

        $query->andFilterWhere(['ilike', 'world', $this->world])
            ->andFilterWhere(['ilike', 'image', $this->image]);

        return $dataProvider;
    }
}
