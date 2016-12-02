<?php

namespace frontend\models\gupiao;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * This is the model class for table "gp_gupiao_code".
 *
 * @property integer $id
 * @property string $code
 * @property string $type
 * @property integer $status
 * @property string $date_str
 * @property integer $date_int
 * @property string $create_at
 * @property string $update_at
 */
class GupiaoCode extends \common\models\gupiao\GupiaoCode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'date_int'], 'integer'],
            [['code', 'type', 'date_str', 'name', 'create_at', 'update_at'], 'safe'],
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
            'status' => $this->status,
            'date_int' => $this->date_int,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'date_str', $this->date_str]);

        return $dataProvider;
    }
}
