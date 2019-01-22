<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Foreignworld;

/**
 * ForeignworldSearch represents the model behind the search form of `app\models\Foreignworld`.
 */
class ForeignworldSearch extends Foreignworld
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_russianworlds', 'id_languages'], 'integer'],
            [['translate', 'sound', 'picture'], 'safe'],
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
        $query = Foreignworld::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
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
            'id_russianworlds' => $this->id_russianworlds,
            'id_languages' => $this->id_languages,
        ]);

        $query->andFilterWhere(['ilike', 'translate', $this->translate])
            ->andFilterWhere(['ilike', 'sound', $this->sound])
            ->andFilterWhere(['ilike', 'picture', $this->picture]);

        return $dataProvider;
    }
}
