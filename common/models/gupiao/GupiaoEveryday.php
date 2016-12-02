<?php

namespace common\models\gupiao;

use Yii;

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
class GupiaoEveryday extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gp_everyday';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date_str', 'gp_id', 'open_price', 'close_price', 'low_price', 'high_price', 'last_price', 'tunover_persent'], 'required'],
            [['id', 'gp_id', 'open_price', 'close_price', 'low_price', 'high_price', 'deal_number', 'detail_start_id', 'detail_end_id'], 'integer'],
            [['date_str', 'updated_at'], 'safe'],
            [['last_price', 'tunover_persent', 'deal_money', 'all_market_value', 'liutong_market_value', 'shake_persent', 'shake_value'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_str' => '成交日期',
            'gp_id' => 'Gp ID',
            'open_price' => '单位 分',
            'close_price' => '单位 分',
            'low_price' => '单位 分',
            'high_price' => '单位 分',
            'last_price' => 'Last Price',
            'tunover_persent' => 'Tunover Persent',
            'deal_number' => '单位0.01手',
            'deal_money' => '单位元',
            'all_market_value' => '市值单位元',
            'liutong_market_value' => '流通中市值单位元',
            'shake_persent' => '跌涨百分比',
            'shake_value' => '跌涨幅度',
            'detail_start_id' => 'Detail Start ID',
            'detail_end_id' => 'Detail End ID',
            'updated_at' => 'Updated At',
        ];
    }
}
