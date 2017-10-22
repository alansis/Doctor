<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Workers;

/**
 * WorkersSearch represents the model behind the search form about `common\models\Workers`.
 */
class WorkersSearch extends Workers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'department_id'], 'integer'],
            [['Name', 'Subname', 'Surname', 'Passport_id', 'Specialization', 'Position'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Workers::find();

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
            'department_id' => $this->department_id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Subname', $this->Subname])
            ->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Passport_id', $this->Passport_id])
            ->andFilterWhere(['like', 'Specialization', $this->Specialization])
            ->andFilterWhere(['like', 'Position', $this->Position]);

        return $dataProvider;
    }
}
