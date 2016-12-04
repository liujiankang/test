<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 23:01
 */
namespace common\servers\sina;

use common\lib\log\LogText;
use common\models\gupiao\GupiaoCode;
use common\models\gupiao\GupiaoEverydaySina as GupiaoEveryModel;
use common\servers\BaseService;
use common\lib\http\PhpTransfer;
use common\models\config\RuntimeConfig;
use Yii;

class GpHistoryEveryday extends BaseService
{

    public $httpOperator;
    public $requestUrl = 'http://quotes.money.163.com/service/chddata.html?code={:code}&start=19961205&end=20161201&fields=TCLOSE;HIGH;LOW;TOPEN;LCLOSE;CHG;PCHG;TURNOVER;VOTURNOVER;VATURNOVER;TCAP;MCAP';
    public $requestFile = 'data/{:code}.csv';
    public $isFromFile = false;
    public $isRemoveFirstLine = true;
    public $arrayBlockSize = 100;
    public $gpActon = 'history_everyday_sina';
    public $titleMap = [0 => "日期", 1 => "股票代码", 2 => "名称", 3 => "收盘价", 4 => "最高价", 5 => "最低价", 6 => "开盘价", 7 => "前收盘", 8 => "涨跌额", 9 => "涨跌幅", 10 => "换手率", 11 => "成交量", 12 => "成交金额", 13 => "总市值", 14 => "流通市值"];
    public $keyMap = [0 => "date_str", 1 => 'code', 2 => 'gp_name', 3 => "close_price", 4 => "high_price", 5 => "low_price", 6 => "open_price", 7 => "last_price", 8 => "shake_value", 9 => "shake_percent", 10 => "turnover_percent", 11 => "deal_number", 12 => "deal_money", 13 => "all_market_value", 14 => "liutong_market_value"];
    public $addField = [0 => "date_str", 1 => 'gp_id', 3 => "close_price", 4 => "high_price", 5 => "low_price", 6 => "open_price", 7 => "last_price", 8 => "shake_value", 9 => "shake_percent", 10 => "turnover_percent", 11 => "deal_number", 12 => "deal_money", 13 => "all_market_value", 14 => "liutong_market_value"];
    public $keyFloatFormat = [13, 14];

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
    }

    public function actionRun($isByFile = false)
    {
        //$this->writeAllCode();
        $this->isFromFile = $isByFile;
        $this->isFromFile = true;
        $this->writeOneContent('000001');
        //$this->writeAllContent();
    }

    /**
     * 写出所有的股票号码
     * */
    public function writeAllCode()
    {
        $gupiaoCodes = GupiaoCode::find()
            ->select('code')
            ->asArray()
            ->column();
        $str = implode("\n", $gupiaoCodes);
        $file = fopen('gupiaoCode.text', 'a+');
        fwrite($file, $str);
        fclose($file);
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
                }else{
                    $line['gp_id'] = $gp_id;
                    $tempArray=[];
                    foreach ($this->addField as $field){
                        array_push($tempArray,$line[$field]);
                    }
                    array_push($unHaveBlock, $tempArray);
                }
            }
            LogText::log($hadBlock, 'this_gp_everyday_overwrite');

            if(!empty($unHaveBlock) && count($unHaveBlock)>0){
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