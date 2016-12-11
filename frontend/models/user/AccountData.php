<?php

namespace frontend\models\user;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class AccountData extends \common\models\user\AccountData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'status', 'update_int'], 'integer'],
            [['charge_money', 'withdraw_money', 'invested_money', 'investing_money', 'available_money', 'income_money', 'fee_money'], 'number'],
            [['update_at'], 'safe'],
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
        $query = self::find();

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
            'user_id' => $this->user_id,
            'charge_money' => $this->charge_money,
            'withdraw_money' => $this->withdraw_money,
            'invested_money' => $this->invested_money,
            'investing_money' => $this->investing_money,
            'available_money' => $this->available_money,
            'income_money' => $this->income_money,
            'fee_money' => $this->fee_money,
            'status' => $this->status,
            'update_int' => $this->update_int,
            'update_at' => $this->update_at,
        ]);

        return $dataProvider;
    }
}
