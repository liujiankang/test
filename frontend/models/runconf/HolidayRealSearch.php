<?php

namespace frontend\models\runconf;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\runconf\HolidayReal;

/**
 * HolidayRealSearch represents the model behind the search form about `frontend\models\runconf\HolidayReal`.
 */
class HolidayRealSearch extends HolidayReal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date_int'], 'integer'],
            [['date_str', 'type', 'updated_at'], 'safe'],
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
        $query = HolidayReal::find();

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
            'date_int' => $this->date_int,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'date_str', $this->date_str])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
