<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 23:01
 */
namespace common\servers\wangyi;

use common\lib\log\LogText;
use common\models\gupiao\GupiaoCode;
use common\models\gupiao\GupiaoEveryday;
use common\servers\BaseService;
use common\lib\http\PhpTransfer;
use common\models\config\RuntimeConfig;
use Yii;

class GpHistoryEveryday extends BaseService
{

    public $httpOperator;
    public $requestUrl = 'http://quotes.money.163.com/service/chddata.html?code={:code}&start=19961205&end=20161201&fields=TCLOSE;HIGH;LOW;TOPEN;LCLOSE;CHG;PCHG;TURNOVER;VOTURNOVER;VATURNOVER;TCAP;MCAP';
    public $isFromFile = false;

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
    }

    public function actionRun()
    {
        $this->getAllContent();
    }

    public function getAllContent()
    {
        $hadDeal = RuntimeConfig::findOne(['action' => 'history_everyday']);
        $lastDeal = json_decode($hadDeal->detail);
        $thisDeal = [];
        if (empty($lastDeal) or !isset($lastDeal['lastId'])) {
            $thisDeal = ['lastId' => 1];
        } else {
            $thisDeal['lastId'] = $lastDeal['lastId'] + 1;
        }

        $gupiao = GupiaoCode::findOne(['code' => $thisDeal['lastId']]);
        if (empty($gupiao)) {
            $thisDeal['message'] = 'no result';
            LogText::log($thisDeal, 'gupiao_history_everyday_error');
            exit;
        } else {
            if ($this->isFromFile) {
                $content = $this->getOneContentByFile($gupiao->code);
            } else {
                $content = $this->getOneContentByUrl($gupiao->code);
            }

            if (!empty($content)) {
                $result = $this->updateGpEveryday($content);
                if (!$result) {
                    LogText::log($gupiao->code, 'save content Error');
                }
            } else {
                LogText::log($gupiao->code, 'get content Error');
            }
        }
        $file = fopen('gupiao', 'a+');
        foreach ($gupiao as $code) {
            $url = str_replace('{:code}', $code, $this->requestUrl);
            fwrite($file, $url . PHP_EOL);
        }
        fclose($file);
        echo 'done';
    }

    public function getOneContentByUrl($code)
    {
        $url = str_replace('{:code}', $code, $this->requestUrl);
        $rawContent = $this->httpOperator->getContent(null, urlencode($url));
        LogText::log($rawContent, $code);
        return $gpArray = $this->gpCodeDecode($rawContent);
    }

    public function getOneContentByFile($code)
    {
        $url = str_replace('{:code}', $code, $this->requestUrl);
        $rawContent = $this->httpOperator->getContent(null, urlencode($url));
        LogText::log($rawContent, $code);
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
        var_dump($rawArray[0]);
        die;
        if (!isset($rawArray['data']) || !is_array($rawArray['data']) || count($rawArray['data']) < 1 || !isset($rawArray['data'][0]['stockcode'])) {
            LogText::log($content, 'decodeError');
            return false;
        }
        return $data = array_column($rawArray['data'], 'stockcode');
    }


}