<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Funkcja;

/**
 * FunkcjaSearch represents the model behind the search form of `frontend\models\Funkcja`.
 */
class FunkcjaSearch extends Funkcja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nazwa'], 'safe'],
            [['ID_Funkcja'], 'integer'],
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
        $query = Funkcja::find();

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
            'ID_Funkcja' => $this->ID_Funkcja,
        ]);

        $query->andFilterWhere(['like', 'Nazwa', $this->Nazwa]);

        return $dataProvider;
    }
}
