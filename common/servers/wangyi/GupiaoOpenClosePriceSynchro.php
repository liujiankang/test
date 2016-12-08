<?php
namespace common\servers\wangyi;

/**
 * 来自同花顺 每天概况
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use common\lib\http\PhpTransfer;
use common\lib\log\LogText;
use common\servers\BaseService;
use yii\helpers\Json;

class GupiaoOpenClosePriceSynchro extends BaseService
{

    public $httpOperator;
    public $requestUrl = '';
    public $shortNameMap = [1 => 'hu_a', 2 => 'hu_b', 3 => 'zh_a', 4 => 'zh_b'];
    public $Url = [
        1 => 'http://quotes.money.163.com/hs/service/diyrank.php?host=http%3A%2F%2Fquotes.money.163.com%2Fhs%2Fservice%2Fdiyrank.php&page={:page}&query=STYPE%3AEQA&fields=NO%2CSYMBOL%2CNAME%2CPRICE%2CPERCENT%2CUPDOWN%2CFIVE_MINUTE%2COPEN%2CYESTCLOSE%2CHIGH%2CLOW%2CVOLUME%2CTURNOVER%2CHS%2CLB%2CWB%2CZF%2CPE%2CMCAP%2CTCAP%2CMFSUM%2CMFRATIO.MFRATIO2%2CMFRATIO.MFRATIO10%2CSNAME%2CCODE%2CANNOUNMT%2CUVSNEWS&sort=PERCENT&order=desc&count=24&type=query',
        2 => 'http://quotes.money.163.com/hs/service/diyrank.php?host=http%3A%2F%2Fquotes.money.163.com%2Fhs%2Fservice%2Fdiyrank.php&page={:page}&query=STYPE%3AEQB&fields=NO%2CSYMBOL%2CNAME%2CPRICE%2CPERCENT%2CUPDOWN%2CFIVE_MINUTE%2COPEN%2CYESTCLOSE%2CHIGH%2CLOW%2CVOLUME%2CTURNOVER%2CHS%2CLB%2CWB%2CZF%2CPE%2CMCAP%2CTCAP%2CMFSUM%2CMFRATIO.MFRATIO2%2CMFRATIO.MFRATIO10%2CSNAME%2CCODE%2CANNOUNMT%2CUVSNEWS&sort=PERCENT&order=desc&count=24&type=query',
    ];
    //http://quotes.money.163.com/old/#query=EQA&DataType=HS_RANK&sort=PERCENT&order=desc&count=24&page=0
    public $fileName = 'gupiaoOpenClose/';
    public $errorFile = 'gupiaoOpenClose/';
    public $exceptionTime=0;

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
        $this->fileName .= 'wangyi-' . date('Y-m-d') . '.txt';
        $this->errorFile .= 'wangyi-' . date('Y-m-d') . '.log';
    }

    public function actionRun()
    {
        return $this->getAllContent();
    }

    public function getAllContent()
    {
        if (file_exists($this->fileName)) {
            return ['status' => false, 'message' => 'file has exist'];
        }
        $dataHandle = fopen($this->fileName, 'a+');
        $logHandle = fopen($this->errorFile, 'a+');
        $isFirst = true;
        foreach ($this->Url as $key => $url) {
            $emptyTime = 0;
            for ($page = 1; $page < 400; $page++) {
                if ($isFirst) {
                    $isFirst = false;
                    $page = 50;
                }
                $content = $this->getOneContent($key, $page);
                if ($content === 'exception') {
                    $this->exceptionTime;
                    if(!isset($this->exceptionTime[$page]) || $this->exceptionTime[$page]<2){
                        $page--;
                    }else{
                        fwrite($logHandle, "page $page Exception 2 times ");
                    }
                } elseif (empty($content) || !is_array($content) || count($content) < 1) {
                    $emptyTime++;
                    fwrite($logHandle, "page $page empty $emptyTime times ");
                    if ($emptyTime > 2) {
                        break;
                    } else {
                        continue;
                    }
                } else {
                    $oneStr = '';
                    foreach ($content as $one) {
                        $oneStr .= json_encode($one) . PHP_EOL;
                    }
                    $result = fwrite($dataHandle, $oneStr);
                    if ($result) {
                        fwrite($logHandle, "page $page success" . PHP_EOL);
                    }
                }
                $sleep = rand(2, 5);
                sleep($sleep);
            }
        }
        fclose($dataHandle);
        fclose($logHandle);
        return true;
    }

    public function getOneContent($type, $page)
    {
        $url = $this->getUrl($type, $page);
        $rawContent = $this->getContent($url);
        return $gpArray = $this->gpCodeDecode($rawContent);
    }

    public function getContent($url = null, $params = null)
    {
        return $content = $this->httpOperator->getContent($params, $url);
    }


    public function getUrl($type, $page)
    {
        $url = $this->Url[$type];
        return $this->requestUrl = str_replace('{:page}', $page, $url);
    }

    public function gpCodeDecode($content)
    {
        //$content= iconv("gb2312", "UTF-8" , $content);
        //$content= iconv("GBK", "UTF-8//TRANSLIT" , $content);

        $content = mb_convert_encoding($content, "UTF-8");
        //$content= iconv("gb18030", "utf-8//TRANSLIT" , $content);
        try {
            $rawArray = Json::decode($content, true);
        } catch (\Exception $e) {
            $handle = fopen('123.log', 'a+');
            fwrite($handle, $content);
            fclose($handle);
            return 'exception';
        }
        if (!isset($rawArray['list']) || !is_array($rawArray['list']) || count($rawArray['list']) < 1) {
            LogText::log($content, 'decodeError');
            return false;
        }
        return $rawArray['list'];
    }

}