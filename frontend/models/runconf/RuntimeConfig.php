<?php

namespace frontend\models\runconf;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "gp_runtime_config".
 *
 * @property integer $id
 * @property string $model
 * @property string $action
 * @property integer $last_time
 * @property string $describe
 */
class RuntimeConfig extends \common\models\config\RuntimeConfig
{
    public function rules()
    {
        return [
            [['id', 'last_time'], 'integer'],
            [['model', 'action', 'describe'], 'safe'],
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
        $query = RuntimeConfig::find();

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
            'last_time' => $this->last_time,
        ]);

        $query->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'describe', $this->describe]);

        return $dataProvider;
    } 
}
