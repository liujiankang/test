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
    public $timetoStr;
    public $timeToInt;
    public $daysDiff;
    public $holdNum;
    public $historyPrice;
    public $nowPrice;
    public $error;
    public $wastedDays;

    public $yongjinByNum = false;//佣金
    public $yongjinRate = 0.003;
    public $yongjinMinAmount = 5;
    public $yinhuaByNum = false;//印花
    public $yinhuaRate = 0.003;
    public $yinhuaMinAmount = 5;
    public $guohuByNum = false;//过户
    public $guohuRate = 0.003;
    public $guohuMinAmount = 5;

    public function __construct()
    {
    }

    public function init($timeFromInt, $timeToInt, $historyPrice, $nowPrice, $holdNum)
    {
        $this->timeFromStr = date('Y-m-d', $timeFromInt);
        $this->timeToStr = date('Y-m-d', $timeToInt);
        $this->timeFromInt = $timeFromInt;
        $this->timeToInt = $timeToInt;

        $this->daysDiff = round((strtotime($this->timetoStr) - strtotime($this->timetoStr)) / 86400, 0);
        $this->historyPrice = $historyPrice;
        $this->nowPrice = $nowPrice;
        $this->holdNum = $holdNum;
    }

    /**
     * 双向计算收费
     * */
    public function getTwoWayFee()
    {
        if ($this->yongjinByNum) {
            $buy_yongjin = $this->holdNum * $this->yongjinRate;
            $sold_yongjin = $this->holdNum * $this->yongjinRate;
        } else {
            $buy_yongjin = $this->holdNum * $this->yongjinRate;
            $sold_yongjin = $this->holdNum * $this->yongjinRate;
        }
        if ($buy_yongjin < $this->yongjinMinAmount) {
            $buy_yongjin = $this->yongjinMinAmount;
        }
        if ($sold_yongjin < $this->yongjinMinAmount) {
            $sold_yongjin = $this->yongjinMinAmount;
        }


        if ($this->yinhuaByNum) {
            $buy_yinhua = $this->holdNum * $this->yinhuaRate;
            $sold_yinhua = $this->holdNum * $this->yinhuaRate;
        } else {
            $buy_yinhua = $this->holdNum * $this->yinhuaRate;
            $sold_yinhua = $this->holdNum * $this->yinhuaRate;
        }
        if ($buy_yinhua < $this->yinhuaMinAmount) {
            $buy_yinhua = $this->yinhuaMinAmount;
        }
        if ($sold_yinhua < $this->yinhuaMinAmount) {
            $sold_yinhua = $this->yinhuaMinAmount;
        }

        if ($this->guohuByNum) {
            $buy_guohu = $this->holdNum * $this->guohuRate;
            $sold_guohu = $this->holdNum * $this->guohuRate;
        } else {
            $buy_guohu = $this->holdNum * $this->guohuRate;
            $sold_guohu = $this->holdNum * $this->guohuRate;
        }
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
     * 单向计算收费
     * */
    public function getOneWayFee()
    {
        if ($this->yongjinByNum) {
            $sold_yongjin = $this->holdNum * $this->yongjinRate;
        } else {
            $sold_yongjin = $this->holdNum * $this->yongjinRate;
        }
        if ($sold_yongjin < $this->yongjinMinAmount) {
            $sold_yongjin = $this->yongjinMinAmount;
        }


        if ($this->yinhuaByNum) {
            $sold_yinhua = $this->holdNum * $this->yinhuaRate;
        } else {
            $sold_yinhua = $this->holdNum * $this->yinhuaRate;
        }
        if ($sold_yinhua < $this->yinhuaMinAmount) {
            $sold_yinhua = $this->yinhuaMinAmount;
        }

        if ($this->guohuByNum) {
            $sold_guohu = $this->holdNum * $this->guohuRate;
        } else {
            $sold_guohu = $this->holdNum * $this->guohuRate;
        }
        if ($sold_guohu < $this->guohuMinAmount) {
            $sold_guohu = $this->guohuMinAmount;
        }

        $rawFee = ($this->buy_yongjin + $sold_yongjin + $this->buy_yinhua + $sold_yinhua + $this->buy_guohu + $sold_guohu);
        return $fee = round($rawFee, 2);
    }

    public function getRawIncome()
    {
        return ($this->nowPrice - $this->historyPrice) * $this->holdNum;
    }

    public function getRealIncome(){
        $rawIncome=$this->getRawIncome();
        $fee=$this->getTwoWayFee();
        $days=$this->getHoldDays();
        $realIncome=($rawIncome - $fee);
        $rate=($realIncome/$this->holdNum/$this->historyPrice);
        $yearRate=$rate*$days/$this->yearDays;
        return ['realIncome'=>$realIncome,'rawIncome'=>$rawIncome,'rate'=>$rate,'annualRate'=>$yearRate];
    }

    public function getHoldDays(){
        return $this->daysDiff +2;
    }
}