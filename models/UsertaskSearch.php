<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usertask;

/**
 * UsertaskSearch represents the model behind the search form of `app\models\Usertask`.
 */
class UsertaskSearch extends Usertask
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'know', 'id_tasks', 'id_user'], 'integer'],
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
        $query = Usertask::find();

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
            'know' => $this->know,
            'id_tasks' => $this->id_tasks,
            'id_user' => $this->id_user,
        ]);

        return $dataProvider;
    }
}
