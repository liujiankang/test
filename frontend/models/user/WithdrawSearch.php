<?php

namespace frontend\models\user;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\user\Withdraw;

/**
 * WithdrawSearch represents the model behind the search form about `frontend\models\user\Withdraw`.
 */
class WithdrawSearch extends Withdraw
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'uid', 'date_int', 'status'], 'integer'],
            [['amount'], 'number'],
            [['date_str'], 'safe'],
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
        $query = Withdraw::find();

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
            'uid' => $this->uid,
            'amount' => $this->amount,
            'date_str' => $this->date_str,
            'date_int' => $this->date_int,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
