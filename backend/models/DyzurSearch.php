<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dyzur;

/**
 * DyzurSearch represents the model behind the search form of `backend\models\Dyzur`.
 */
class DyzurSearch extends Dyzur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_dyzur', 'ID_Funkcja', 'ID_Miejsce', 'ID_Pracownik'], 'integer'],
            [['Od_kiedy', 'Do_kiedy'], 'safe'],
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
        $query = Dyzur::find();

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
            'ID_dyzur' => $this->ID_dyzur,
            'ID_Funkcja' => $this->ID_Funkcja,
            'ID_Miejsce' => $this->ID_Miejsce,
            'Od_kiedy' => $this->Od_kiedy,
            'Do_kiedy' => $this->Do_kiedy,
            'ID_Pracownik' => $this->ID_Pracownik,
        ]);

        return $dataProvider;
    }
}
