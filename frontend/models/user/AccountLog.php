<?php

namespace frontend\models\user;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * AccountLogSearch represents the model behind the search form about `frontend\models\user\AccountLog`.
 */

class AccountLog extends \common\models\user\AccountLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'action_type', 'income_type', 'action_time', 'status'], 'integer'],
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
            'amount' => $this->amount,
            'action_type' => $this->action_type,
            'income_type' => $this->income_type,
            'action_time' => $this->action_time,
            'date_str' => $this->date_str,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
