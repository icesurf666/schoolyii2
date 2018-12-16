<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Task;

/**
 * TaskSearch represents the model behind the search form of `app\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_languages'], 'integer'],
            [['sentence', 'translate', 'sound', 'true_answer', 'false_answer'], 'safe'],
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
        $query = Task::find();

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
            'id_languages' => $this->id_languages,
        ]);

        $query->andFilterWhere(['ilike', 'sentence', $this->sentence])
            ->andFilterWhere(['ilike', 'translate', $this->translate])
            ->andFilterWhere(['ilike', 'sound', $this->sound])
            ->andFilterWhere(['ilike', 'true_answer', $this->true_answer])
            ->andFilterWhere(['ilike', 'false_answer', $this->false_answer]);

        return $dataProvider;
    }
}
