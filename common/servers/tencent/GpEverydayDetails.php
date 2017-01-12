<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 23:01
 */
namespace common\servers\tencent;

use common\lib\http\WgetTransfer;
use common\lib\log\LogText;
use common\models\config\HolidayReal;
use common\models\gupiao\GupiaoCode;
use common\models\gupiao\GupiaoEverydayWangyi as GupiaoEveryModel;
use common\models\gupiao\GupiaoEverydayWangyi;
use common\servers\BaseService;
use common\lib\http\PhpTransfer;
use common\models\config\RuntimeConfig;
use common\servers\wangyi\GpHistoryEveryday;
use Yii;
use yii\helpers\FileHelper;

class GpEverydayDetails extends BaseService
{

    public $httpOperator;
    public $requestUrl = 'http://stock.gtimg.cn/data/index.php?appn=detail&action=download&c={:code}&d={:date}';
    //http://stock.gtimg.cn/data/index.php?appn=detail&action=download&c=sh601919&d=20161223
    public $requestFile = 'data/{:code}.csv';
    public $isFromFile = false;
    public $isRemoveFirstLine = true;
    public $arrayBlockSize = 100;
    public $codeTypeMap;
    public $gpActon = 'history_everyday_sina';
    public $titleMap = [0 => "日期", 1 => "股票代码", 2 => "名称", 3 => "收盘价", 4 => "最高价", 5 => "最低价", 6 => "开盘价", 7 => "前收盘", 8 => "涨跌额", 9 => "涨跌幅", 10 => "换手率", 11 => "成交量", 12 => "成交金额", 13 => "总市值", 14 => "流通市值"];
    public $keyMap = [0 => "date_str", 1 => 'code', 2 => 'gp_name', 3 => "close_price", 4 => "high_price", 5 => "low_price", 6 => "open_price", 7 => "last_price", 8 => "shake_value", 9 => "shake_percent", 10 => "turnover_percent", 11 => "deal_number", 12 => "deal_money", 13 => "all_market_value", 14 => "liutong_market_value"];
    public $addField = [0 => "date_str", 1 => 'gp_id', 3 => "close_price", 4 => "high_price", 5 => "low_price", 6 => "open_price", 7 => "last_price", 8 => "shake_value", 9 => "shake_percent", 10 => "turnover_percent", 11 => "deal_number", 12 => "deal_money", 13 => "all_market_value", 14 => "liutong_market_value"];
    public $keyFloatFormat = [13, 14];
    public $maxId;
    public $minId;
    public $fileExt = '.qq.xls';
    public $runningKey = '';

    public function init()
    {
        parent::init();
        $this->httpOperator = new WgetTransfer();
        $this->httpOperator->init('/data/gupiao/tencent/');
        $this->codeTypeMap = [
            GupiaoCode::TYPE_HUA => 'sh', GupiaoCode::TYPE_HUB => 'sh',
            GupiaoCode::TYPE_ZHA => 'sz', GupiaoCode::TYPE_ZHB => 'sz',
        ];
    }

    /**
     * 股票当天成交详情同步
     * */
    public function actionOneSyn()
    {
        $date = date('Y-m-d');
        $this->runningKey = md5(__METHOD__ . $date);
        if ($this->isRunning($this->runningKey)) {
            Yii::warning('getting data of day ' . $date . ' is running');
            return false;
        } else {
            if (HolidayReal::findOne(['date_str' => $date, 'status' => 1])) {
                Yii::info('getting data of day ' . $date . ' start');
                $this->getCodesF($date);
                Yii::info('getting data of day ' . $date . ' end');
            } else {
                Yii::warning('this day is not gupiao day ' . $date, __METHOD__);
            }
            return true;
        }
    }

    /**
     * 股票历史每一天成交详情同步
     * */
    public function actionAllSyn()
    {
        if ($lastDate = $this->getLastDate()) {
            $nextDay = $this->getNextDate($lastDate);
            if ($nextDay) {
                $configDate = $lastDate->detail;
                $configDate['lastDate'] = $nextDay->date_str;
                $lastDate->detail = json_encode($configDate);
                $this->runningKey = md5(__METHOD__ . $nextDay->date_str);
                if ($this->isRunning($this->runningKey)) {
                    Yii::warning('getting data of day ' . $nextDay->date_str . ' is running', __METHOD__);
                } else {
                    Yii::info("began get date $nextDay->date_str data", __METHOD__);
                    $nextDay->is_downed = HolidayReal::DOWN_STATUS_DOWNING;
                    if (!$nextDay->save()) {
                        var_dump($nextDay->getErrors());
                    };
                    $this->disPatch($nextDay->date_str);
                    if (!$lastDate->save()) {
                        var_dump($lastDate->getErrors());
                    }
                    $nextDay->is_downed = HolidayReal::DOWN_STATUS_DONE;
                    if (!$nextDay->save()) {
                        var_dump($nextDay->getErrors());
                    };
                    Yii::info("ended get date $nextDay->date_str data", __METHOD__);
                    return true;
                }
            }
        }
        return false;
    }

    //得到上一个更新的日期
    public function getLastDate()
    {
        $lastDate = RuntimeConfig::findOne(['action' => 'qq_get_all_detail_by_day']);
        if (!empty($lastDate->detail)) {
            $lastDate->detail = json_decode($lastDate->detail, true);
        }
        if (!is_array($lastDate->detail) || !isset($lastDate->detail['lastDate'])) {
            Yii::warning(['msg' => 'config error and have to init', 'data' => $lastDate->detail], __METHOD__);
            $lastDate->detail = ['lastDate' => '2016-01-01', 'endDate' => '2016-12-12'];
        }
        return $lastDate;
    }

    public function getNextDate($lastDate)
    {
        $configDate = $lastDate->detail;
        $nextDay = HolidayReal::find()
            ->where(['status' => HolidayReal::STATUS_WORKDAY, 'is_downed' => [HolidayReal::DOWN_STATUS_NOT_BEGAN, HolidayReal::DOWN_STATUS_DOWNING]])
            ->andWhere(['>', 'date_str', $configDate['lastDate']])
            ->andWhere(['<', 'date_str', $configDate['endDate']])
            ->orderBy('date_str')
            ->one();
        if (empty($nextDay)) {
            Yii::warning(['msg' => 'history data already done'], __METHOD__);
        } else {
            if ($nextDay->is_downed == HolidayReal::DOWN_STATUS_DOWNING) {
                if (time() - strtotime($nextDay->updated_at) > 4 * 60 * 60) {
                    $exceptionNum = HolidayReal::find()
                        ->where(['status' => HolidayReal::STATUS_WORKDAY, 'is_downed' => HolidayReal::DOWN_STATUS_EXCEPTION])
                        ->count();
                    if ($exceptionNum < 3) {
                        Yii::error(['msg' => 'there has one download exceptions on date ' . $nextDay->date_str], __METHOD__);
                        $nextDay->is_downed = HolidayReal::DOWN_STATUS_EXCEPTION;
                        $nextDay->save(false);
                    } else {
                        Yii::error(['msg' => 'there has too many download exceptions'], __METHOD__);
                    }
                }
            } else {
                return $nextDay;
            }
        }
        return false;
    }

    public function disPatch($date)
    {
        $status = GupiaoEveryModel::STATUS_UNDOWN;
        $gupiaoRaw = $this->getCodes($date, $status);
        if (empty($gupiaoRaw)) {
            Yii::warning(['msg' => 'this day do not have gupiao', 'date' => $date], __METHOD__);
        } else {
            $gupiaos = array_chunk($gupiaoRaw, 15);
            $allNum = count($gupiaos);
            foreach ($gupiaos as $key => $gupiaoTen) {
                $this->runningTouch($this->runningKey);
                $downUrl = $this->getDownUrl($gupiaoTen);
                $downTime = time();
                $result = $this->httpOperator->getMultiContent($downUrl, true);
                $percent = round($key / $allNum * 100, 1);
                var_dump(['percent' => "$key/$allNum = $percent %", 'result' => $result]);
                Yii::info(['gupiaos' => $gupiaos, 'result' => $result], __METHOD__);
                $this->updateCodesStatus($gupiaoTen, GupiaoEverydayWangyi::STATUS_DOWNED);
                if (time() - $downTime > 10) {
                    sleep(5);
                }
            }
        }
        return true;
    }

    /**
     * 得到要更新的code
     * */
    public function getCodes($date, $status, $limit = 0)
    {
        $sql = "SELECT d.id, d.date_str, c.code, c.type  
              FROM gp_everyday_wangyi AS d
              INNER JOIN gp_gupiao_code AS c ON d.gp_id=c.id 
              WHERE d.date_str=:date AND d.status=:status ";
        if ($limit > 0) {
            $sql .= "LIMIT $limit";
        }
        $result = Yii::$app->db->createCommand($sql, [':date' => $date, ':status' => $status]);
        return $result->queryAll();
    }

    /**
     * 更新要更新的code
     * */
    public function updateCodesStatus($data, $status)
    {
        if (empty($data) || !isset($data[0]['id'])) {
            return false;
        } else {
            $ids = array_column($data, 'id');
            return GupiaoEverydayWangyi::updateAll(['status' => $status], ['id' => $ids]);
        }
    }

    public function getCodesF($date)
    {
        $gupiaoRaw = GupiaoCode::find()->select(['code', 'type'])->asArray()->all();
        $gupiaos = array_chunk($gupiaoRaw, 10);
        $allNum = count($gupiaos);
        foreach ($gupiaos as $key => $gupiaoTen) {
            foreach ($gupiaoTen as &$val) {
                $val['date_str'] = $date;
            }
            $downUrl = $this->getDownUrl($gupiaoTen);
            $downTime = time();
            $result = $this->httpOperator->getMultiContent($downUrl, true);
            $percent = round($key / $allNum * 100, 1);
            var_dump(['percent' => "$key/$allNum = $percent %", 'result' => $result]);
            if (time() - $downTime > 10) {
                sleep(1);
            }
        }
    }

    public function getDownUrl($data)
    {
        if (!is_array($data) || count($data) < 1 || !isset($data[0]) || count($data[0]) < 1) {
            return false;
        }

        if (!isset($data[0]['code']) || !isset($data[0]['type']) || !isset($data[0]['date_str']) || strlen($data[0]['date_str']) < 8) {
            return false;
        }

        $returnData = [];
        foreach ($data as $key => $val) {
            $time = strtotime($val['date_str']);
            $dir = date('Y', $time) . DIRECTORY_SEPARATOR . date('Ymd', $time) . DIRECTORY_SEPARATOR;
            $date = date('Ymd', $time);
            $name = $date . '_' . $val['code'] . $this->fileExt;
            $downCode = $this->codeTypeMap[$val['type']] . $val['code'];
            //$downName = date('Y', $time) . '/' . date('Ymd', $time) . '/' . $name.'.xls';
            $url = str_replace('{:code}', $downCode, $this->requestUrl);
            $url = str_replace('{:date}', $date, $url);
            array_push($returnData, ['dir' => $dir, 'name' => $name, 'url' => $url]);
        }
        return $returnData;
    }

    public function getContentByFiles($date){
        $files=FileHelper::findFiles('/data/www');
        foreach ($files as $file){
            $content=$this->getOneContentByFile(454);
        }
    }

    public function writeAllContent()
    {
        $errorNum = 0;
        $systemErrorNum = 0;
        $hadDeal = RuntimeConfig::findOne(['action' => $this->gpActon]);
        $nowMaxId = GupiaoCode::find()->max('id');
        $lastDeal = json_decode($hadDeal->detail);
        $thisDeal = [];
        if (empty($lastDeal) or !isset($lastDeal['lastId'])) {
            $thisDeal = ['lastId' => 1, 'maxId' => $nowMaxId];
        } else {
            $thisDeal['lastId'] = $lastDeal['lastId'] + 1;
        }

        for ($gpId = $thisDeal['lastId']; $gpId < $nowMaxId; $gpId++) {
            $gupiao = GupiaoCode::findOne(['id' => $gpId]);
            if (empty($gupiao)) {
                LogText::log($gpId, 'gupiao_history_everyday_error');
                $systemErrorNum++;
            } else {
                $isWrite = $this->writeOneContent($gupiao->code, $gupiao->id);

                if ($isWrite === false) {
                    LogText::log($gupiao->code, 'save_content_error');
                    $systemErrorNum++;
                } else {
                    $thisDeal['lastId'] = $gpId;
                    $hadDeal->detail = json_encode($thisDeal);
                    $hadDeal->save();
                    LogText::log($gupiao->code, 'save_content_success');
                }
            }

            if ($systemErrorNum || $errorNum >= 3) {
                echo 'exit at middle process';
                return false;
            }
        }
        echo 'done';
        return true;
    }

    public function writeOneContent($code, $gpId = null)
    {

        if ($this->isFromFile) {
            $content = $this->getOneContentByFile($code);
        } else {
            $content = $this->getOneContentByUrl($code);
        }

        if (!empty($content)) {
            if (empty($gpId)) {
                $gupiao = GupiaoCode::findOne(['code' => $code]);
                if (empty($gupiao)) {
                    LogText::log($code, 'gupiao_code_error');
                    return false;
                } else {
                    $gpId = $gupiao->id;
                }
            }
            $result = $this->updateGpEveryday($content, $gpId);
            if ($result === false) {
                LogText::log($code, 'save_content_error');
                return false;
            } else {
                //code update
                return 1;
            }
        } else {
            LogText::log($code, 'get_empty_content_error');
            return 0;
        }
    }

    public function getOneContentByUrl($code)
    {
        $url = str_replace('{:code}', $code, $this->requestUrl);
        $rawContent = $this->httpOperator->getContent(null, $url);
        LogText::log($rawContent, "gpCode $code Raw content");
        return $gpArray = $this->gpCodeDecode($rawContent);
    }

    public function getOneContentByFile($code)
    {
        $dir = str_replace('{:code}', $code, $this->requestFile);
        $rawContent = file_get_contents($dir);
        return $gpArray = $this->gpCodeDecode($rawContent);
    }


    public function updateGpCode($type, $codeArray)
    {
        $gupiaoCodes = GupiaoCode::find()
            ->select('code')
            ->where(['type' => $type, 'code' => $codeArray])
            ->asArray()
            ->column();
        $addCodes = [];
        if ($gupiaoCodes && is_array($gupiaoCodes) && count($gupiaoCodes) > 0) {
            foreach ($codeArray as $code) {
                if (!in_array($code, $gupiaoCodes)) {
                    array_push($addCodes, [$code, $type]);
                }
            }
        } else {
            foreach ($codeArray as $code) {
                array_push($addCodes, [$code, $type]);
            }
        }

        if (count($addCodes) > 1) {
            return GupiaoCode::find()
                ->createCommand()
                ->batchInsert(GupiaoCode::tableName(), ['code', 'type'], $addCodes)
                ->execute();
        }
        return 0;
    }

    public function updateGpEveryday($content, $gp_id)
    {
        if (count($content) > $this->arrayBlockSize) {
            $blockContent = array_chunk($content, $this->arrayBlockSize);
        } else {
            $blockContent[0] = $content;
        }
        foreach ($blockContent as $block) {
            $isHave = GupiaoEveryModel::find()
                ->select('date_str')
                ->where(['gp_id' => $gp_id, 'date_str' => array_column($block, 'date_str')])
                ->column();
            $hadBlock = [];
            $unHaveBlock = [];
            foreach ($block as $line) {
                if ($isHave && is_array($isHave) && in_array($line['date_str'], $isHave)) {
                    array_push($hadBlock, $line);
                } else {
                    $line['gp_id'] = $gp_id;
                    $tempArray = [];
                    foreach ($this->addField as $field) {
                        array_push($tempArray, $line[$field]);
                    }
                    array_push($unHaveBlock, $tempArray);
                }
            }
            LogText::log($hadBlock, 'this_gp_everyday_overwrite');

            if (!empty($unHaveBlock) && count($unHaveBlock) > 0) {
                $result = GupiaoEveryModel::find()
                    ->createCommand()
                    ->batchInsert(GupiaoEveryModel::tableName(), $this->addField, $unHaveBlock)
                    //->getRawSql();
                    ->execute();
                if ($result === false) {
                    LogText::log($block, 'updateGpEverydayError');
                    return false;
                }
            }
            return true;
        }
    }

    public function gpCodeDecode($content)
    {
        //$content1= iconv("gb2312", "UTF-8" , $content);
        $content = iconv("GBK", "UTF-8//TRANSLIT", $content);
        //$content3= mb_convert_encoding ($content, "UTF-8");
        //$content4= iconv("gb18030", "utf-8//TRANSLIT" , $content);
        $rawArray = explode("\r\n", $content);
        if (count($rawArray) > 10) {
            foreach ($rawArray as &$val) {
                if (strpos($val, ',')) {
                    $val = explode(',', $val);
                } elseif (strpos($val, '，')) {
                    $val = explode('，', $val);
                } elseif (strpos($val, ',')) {
                    $val = explode(',', $val);
                } elseif (strpos($val, ',')) {
                    $val = explode(',', $val);
                }
            }
        }
        if ($this->isRemoveFirstLine && count($rawArray) > 10) {
            array_shift($rawArray);
        }
        foreach ($rawArray as $key => $val) {
            $lineMap = [];
            foreach ($this->keyMap as $key2 => $val2) {
                if (in_array($key2, $this->keyFloatFormat)) {
                    $lineMap[$val2] = (float)$val[$key2];
                } else {
                    $lineMap[$val2] = $val[$key2];
                }
            }
            $rawArray[$key] = $lineMap;
        }
        var_dump($rawArray[0]);
        return $rawArray;
    }


}
