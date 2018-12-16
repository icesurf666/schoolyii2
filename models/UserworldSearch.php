<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userworld;

/**
 * UserworldSearch represents the model behind the search form of `app\models\Userworld`.
 */
class UserworldSearch extends Userworld
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'isknow', 'id_foreignworlds', 'id_user'], 'integer'],
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
        $query = Userworld::find();

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
            'isknow' => $this->isknow,
            'id_foreignworlds' => $this->id_foreignworlds,
            'id_user' => $this->id_user,
        ]);

        return $dataProvider;
    }
}
