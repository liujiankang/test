<?php

namespace frontend\models\runconf;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "gp_holiday_raw".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $date_int
 * @property string $type
 * @property string $updated_at
 */
class HolidayRaw extends \common\models\config\HolidayRaw
{
    public function rules()
    {
        return [
            [['id', 'date_int', 'status'], 'integer'],
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
            'date_int' => $this->date_int,
            'status' => $this->status,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'date_str', $this->date_str])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
