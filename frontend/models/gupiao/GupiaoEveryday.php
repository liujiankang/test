<?php

namespace frontend\models\gupiao;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "gp_everyday".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $gp_id
 * @property integer $open_price
 * @property integer $close_price
 * @property integer $low_price
 * @property integer $high_price
 * @property string $last_price
 * @property string $tunover_persent
 * @property string $deal_number
 * @property string $deal_money
 * @property string $all_market_value
 * @property string $liutong_market_value
 * @property string $shake_persent
 * @property string $shake_value
 * @property integer $detail_start_id
 * @property integer $detail_end_id
 * @property string $updated_at
 */
class GupiaoEveryday extends \common\models\gupiao\GupiaoEveryday
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gp_id', 'open_price', 'close_price', 'low_price', 'high_price', 'deal_number', 'detail_start_id', 'detail_end_id'], 'integer'],
            [['date_str', 'updated_at'], 'safe'],
            [['last_price', 'tunover_persent', 'deal_money', 'all_market_value', 'liutong_market_value', 'shake_persent', 'shake_value'], 'number'],
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
        $query = GupiaoEveryday::find();

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
            'date_str' => $this->date_str,
            'gp_id' => $this->gp_id,
            'open_price' => $this->open_price,
            'close_price' => $this->close_price,
            'low_price' => $this->low_price,
            'high_price' => $this->high_price,
            'last_price' => $this->last_price,
            'tunover_persent' => $this->tunover_persent,
            'deal_number' => $this->deal_number,
            'deal_money' => $this->deal_money,
            'all_market_value' => $this->all_market_value,
            'liutong_market_value' => $this->liutong_market_value,
            'shake_persent' => $this->shake_persent,
            'shake_value' => $this->shake_value,
            'detail_start_id' => $this->detail_start_id,
            'detail_end_id' => $this->detail_end_id,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
