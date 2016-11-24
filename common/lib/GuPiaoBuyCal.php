<?php
/**
 * Created by PhpStorm.
 * User: ufo
 * Date: 16-11-21
 * Time: 下午6:37
 */

namespace common\lib;


class GuPiaoCal
{
    public $timeFromStr;
    public $timeFromInt;
    public $timeToStr;
    public $timeToInt;
    public $daysDiff;
    public $holdNum;
    public $historyPrice;
    public $nowPrice;
    public $error;
    public $wastedDays;
    public $thisYearGupiaoDays;//

    public $isByTwoWay = true;
    //public $yongjinByNum = false;//佣金
    public $yongjinRate = 0.16;//%千分之1.6,最低5元 双向收费
    public $yongjinMinAmount = 5;//元
    public $buy_yongjin = 0;
    //public $yinhuaByNum = false;//印花
    public $yinhuaRate = 0.1;//%单向金额的千分之一
    public $yinhuaMinAmount = 0.01;
    //public $guohuByNum = false;//过户
    public $guohuRate = 0.001;//%双向十万分之2 仅上海证劵 进一法
    public $guohuMinAmount = 0.01;
    public $buy_guohu = 0;

    public function __construct()
    {
    }

    /**
     * 初始化赋值
     * */
    public function init($timeFromInt, $timeToInt, $historyPrice, $nowPrice, $holdNum = 10000)
    {
        $this->timeFromStr = date('Y-m-d', $timeFromInt);
        $this->timeToStr = date('Y-m-d', $timeToInt);
        $this->timeFromInt = $timeFromInt;
        $this->timeToInt = $timeToInt;

        $this->daysDiff = round(($this->timeToInt - $this->timeFromInt) / 86400, 0);
        $this->historyPrice = $historyPrice;
        $this->nowPrice = $nowPrice;
        $this->holdNum = $holdNum;
    }

    /**
     * 买入手续费通过计算方式获取，卖出手续费通过计算方式获取
     * */
    public function getTwoWayFee()
    {
        //佣金
        $buy_yongjin = ceil($this->holdNum * $this->historyPrice * $this->yongjinRate) / 100;
        $sold_yongjin = ceil($this->holdNum * $this->nowPrice * $this->yongjinRate) / 100;
        if ($buy_yongjin < $this->yongjinMinAmount) {
            $buy_yongjin = $this->yongjinMinAmount;
        }
        if ($sold_yongjin < $this->yongjinMinAmount) {
            $sold_yongjin = $this->yongjinMinAmount;
        }

        //印花税
        $buy_yinhua = 0;
        $sold_yinhua = ceil($this->holdNum * $this->nowPrice * $this->yinhuaRate) / 100;
        if ($sold_yinhua < $this->yinhuaMinAmount) {
            $sold_yinhua = $this->yinhuaMinAmount;
        }


        $buy_guohu = ceil($this->holdNum * $this->historyPrice * $this->guohuRate) / 100;
        $sold_guohu = ceil($this->holdNum * $this->nowPrice * $this->guohuRate) / 100;

        if ($buy_guohu < $this->guohuMinAmount) {
            $buy_guohu = $this->guohuMinAmount;
        }
        if ($sold_guohu < $this->guohuMinAmount) {
            $sold_guohu = $this->guohuMinAmount;
        }

        $rawFee = ($buy_yongjin + $sold_yongjin + $buy_yinhua + $sold_yinhua + $buy_guohu + $sold_guohu);
        return $fee = round($rawFee, 2);
    }

    /**
     * 单向计算收费：买入手续费通过读取数据库获取，卖出手续费通过计算方式获取
     * */
    public function getOneWayFee()
    {
        //佣金
        $sold_yongjin = ceil($this->holdNum * $this->nowPrice * $this->yongjinRate) / 100;
        if ($sold_yongjin < $this->yongjinMinAmount) {
            $sold_yongjin = $this->yongjinMinAmount;
        }

        //印花税
        $buy_yinhua = 0;
        $sold_yinhua = ceil($this->holdNum * $this->nowPrice * $this->yinhuaRate) / 100;
        if ($sold_yinhua < $this->yinhuaMinAmount) {
            $sold_yinhua = $this->yinhuaMinAmount;
        }

        //过户
        $sold_guohu = ceil($this->holdNum * $this->nowPrice * $this->guohuRate) / 100;
        if ($sold_guohu < $this->guohuMinAmount) {
            $sold_guohu = $this->guohuMinAmount;
        }

        $rawFee = ($this->buy_yongjin + $sold_yongjin + $buy_yinhua + $sold_yinhua + $this->buy_guohu + $sold_guohu);
        return $fee = round($rawFee, 2);
    }

    /**
     *  粗略收益，不包括手续费
     * */
    public function getRawIncome()
    {
        return ($this->nowPrice - $this->historyPrice) * $this->holdNum;
    }

    /**
     * 得到去除手续费的年化收益
     * */
    public function getAnnualRate()
    {
        $rawIncome = $this->getRawIncome();
        if ($this->isByTwoWay) {
            $fee = $this->getTwoWayFee();
        } else {
            $fee = $this->getOneWayFee();
        }
        $days = $this->getHoldDays();
        $realIncome = ($rawIncome - $fee);
        $rate = ($realIncome / $this->holdNum / $this->historyPrice);
        $yearRate = $rate * $days / $this->thisYearGupiaoDays;
        return ['realIncome' => $realIncome, 'rawIncome' => $rawIncome, 'rate' => $rate, 'annualRate' => $yearRate];
    }

    /**
     *  get sold price by annual rate
     * @param $yearRate float 0.01 mean 1%
     * @return array
     * */
    public function getSoldPriceByAnnualRate($yearRate, $accuracy = 0.01)
    {
        $days = $this->getHoldDays();
        $rate = $yearRate * $days / $this->thisYearGupiaoDays;
        $rawPrice = (1 + 2 * $rate) * $this->historyPrice;
        $originalHistoryPrice=$this->historyPrice;
        $originalNowPrice=$this->nowPrice;
        for ($times=0;$times<100;$times++){
            $tempAnnualRateArray=$this->getAnnualRate();
            $tempAnnualRate=$tempAnnualRateArray['annualRate'];
            if($tempAnnualRateArray>$yearRate){

            }else{
                
            }
        }

        $realIncome = $rate * $this->historyPrice * $this->holdNum;
        $realPrice = ($realIncome + $fee) / $this->holdNum;
        $rawPrice = (1 + $rate) * $this->historyPrice;
        return ['realIncome' => $realIncome, 'realPrice' => $realPrice, 'rate' => $rate, 'rawPrice' => $rawPrice, 'rawIncome' => $realIncome + $fee];
    }

    //通过锁定价格得到每一天的收益率
    public function getAnnualRatesByLockedPrice($startDate = null, $days = 30, $key = '')
    {
        if (empty($startDate)) {
            $startDate = $this->timeToInt;
        } else {
            $startDate = strtotime($startDate);
        }
        if (abs(time() - $startDate) / 86400 < 360) {
            return false;
        }
    }


    //通过锁定价格得到每一天的收益率
    public function getPricesByLockedAnnualRate($startDate = null, $days = 30, $key = '')
    {

    }

    //按照间隔时间 加上损失两天计算
    public function getHoldDays()
    {
        return $this->daysDiff + 2;
    }


}