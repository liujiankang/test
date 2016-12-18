<?php

namespace common\models\gupiao;

use Yii;

/**
 * This is the model class for table "gp_everyday".
 *
 * @property integer $id
 * @property string $date_str
 * @property integer $gp_id
 * @property string $open_price
 * @property string $close_price
 * @property string $low_price
 * @property string $high_price
 * @property string $last_price
 * @property string $turnover_percent
 * @property string $deal_number
 * @property string $deal_money
 * @property string $all_market_value
 * @property string $liutong_market_value
 * @property string $shake_percent
 * @property string $shake_value
 * @property integer $detail_start_id
 * @property integer $detail_end_id
 * @property string $updated_at
 */
class GupiaoEveryday extends \common\models\BaseModel
{
    const STATUS_UNDOWN=0;
    const STATUS_DOWNING=1;//开始下载
    const STATUS_DOWNED=2;//下载完成
    const STATUS_DECODEING=3;//开始解码
    const STATUS_DECODED=4;//解码完成
    const STATUS_INSERTING=5;//开始插入
    const STATUS_INSERTED=6;//插入完成
    const STATUS_CHECKING=7;//开始检查
    const STATUS_DONE=8;//检查完成

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
            [['id', 'date_str', 'gp_id', 'last_price', 'turnover_percent'], 'required'],
            [['id', 'gp_id', 'deal_number', 'detail_start_id', 'detail_end_id'], 'integer'],
            [['open_price', 'close_price', 'low_price', 'high_price', 'last_price', 'turnover_percent', 'deal_money', 'all_market_value', 'liutong_market_value', 'shake_percent', 'shake_value'], 'number'],
            [['updated_at'], 'safe'],
            [['date_str'], 'string', 'max' => 20],
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
            'turnover_percent' => 'Turnover Percent',
            'deal_number' => '单位0.01手',
            'deal_money' => '单位元',
            'all_market_value' => '市值单位元',
            'liutong_market_value' => '流通中市值单位元',
            'shake_percent' => '跌涨百分比',
            'shake_value' => '跌涨幅度',
            'detail_start_id' => 'Detail Start ID',
            'detail_end_id' => 'Detail End ID',
            'updated_at' => 'Updated At',
        ];
    }
}
