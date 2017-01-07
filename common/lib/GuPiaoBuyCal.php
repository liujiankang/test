<?php
/**
 * Created by PhpStorm.
 * User: ufo
 * Date: 16-11-21
 * Time: 下午6:37
 * 这里的时间间隔不是实际上的时间间隔
 */

namespace common\lib;


class GuPiaoCal
{
    public $timeFromInt;
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
    public $annualRate = 0;

    public function __construct()
    {
    }

    /**
     * 初始化赋值
     * */
    public function init($timeFromStr, $timeToStr, $historyPrice, $nowPrice, $holdNum = 10000)
    {
        $this->timeFromInt = strtotime($timeFromStr);
        $this->timeToInt = strtotime($timeToStr);

        $this->daysDiff = round(($this->timeToInt - $this->timeFromInt) / 86400, 0);
        $this->historyPrice = $historyPrice;
        $this->nowPrice = $nowPrice;
        $this->holdNum = $holdNum;
        $this->annualRate = $this->getAnnualRate();
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
    public function getAnnualRate($isOtherDate = false)
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
        $return = ['realIncome' => $realIncome, 'rawIncome' => $rawIncome, 'rate' => $rate, 'annualRate' => $yearRate];
        if ($isOtherDate) {
            return $return;
        } else {
            return $yearRate;
        }
    }
    
    public function getRealIncome(){
        return $this->getAnnualRate(true)['realIncome'];
    }
    public function getRate(){
        return $this->getAnnualRate(true)['rate'];
    }

    /**
     *  get sold price by annual rate
     * @param $yearRate float 0.01 mean 1%
     * @return array
     * */
    public function getSoldPriceByAnnualRate($yearRate, $isOverwrite = false, $accuracyRate = 0.00001, $accuracyMoney = 0.001)
    {
        $originalNowPrice = $this->nowPrice;
        $days = $this->getHoldDays();
        $rate = $yearRate * $days / $this->thisYearGupiaoDays;
        $highPrice = (1 + 3 * $rate) * $this->historyPrice;
        $lowPrice = $this->historyPrice;
        $middlePrice = ($highPrice + $lowPrice) / 2;
        for ($times = 0; $times < 100; $times++) {
            $this->nowPrice = $middlePrice;
            $tempAnnualRate = $this->getAnnualRate();
            if ($tempAnnualRate > $yearRate) {
                $highPrice = $middlePrice;
            } else {
                $lowPrice = $middlePrice;
            }
            $middlePrice = ($highPrice + $lowPrice) / 2;
            if ($highPrice - $lowPrice < $accuracyMoney || abs($tempAnnualRate - $yearRate) < $accuracyRate) {
                break;
            }
        }
        if ($isOverwrite) {
            $this->nowPrice = $middlePrice;
        } else {
            $this->nowPrice = $originalNowPrice;
        }
        return $middlePrice;
    }

    //通过锁定价格得到每一天的收益率
    public function getAnnualRatesByLockedPrice($lockedPrice = null, $days = 30, $startDate = null)
    {
        if (empty($startDate)) {
            $startDate = $this->timeToInt;
        } else {
            $startDate = strtotime($startDate);
        }
        $annualRates = [];
        for ($i = 0; $i <= $days; $i++) {
            $this->timeToInt = $startDate + 86400 * $i;
            $annualRates[$i] = $this->getAnnualRate();
        }
        return $annualRates;
    }


    //通过锁定收益得到每一天的价格
    public function getPricesByLockedAnnualRate($annualRate = null, $days = 30, $startDate = null)
    {
        if (empty($startDate)) {
            $startDate = $this->timeToInt;
        } else {
            $startDate = strtotime($startDate);
        }
        $prices = [];
        for ($i = 0; $i <= $days; $i++) {
            $this->timeToInt = $startDate + 86400 * $i;
            $prices[$i] = $this->getSoldPriceByAnnualRate($annualRate);
        }
        return $prices;

    }

    //按照间隔时间 加上损失两天计算
    public function getHoldDays()
    {
        return $this->daysDiff + 2;
    }


}