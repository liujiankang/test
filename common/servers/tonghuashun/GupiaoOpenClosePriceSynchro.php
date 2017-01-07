<?php
namespace common\servers\tonghuashun;

/**
 * 来自同花顺 每天概况
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use common\lib\http\PhpTransfer;
use common\lib\log\LogText;
use yii\helpers\Json;

class GupiaoOpenClosePriceSynchro extends BaseServer
{

    public $httpOperator;
    public $requestUrl = '';
    public $shortNameMap = [1 => 'hu_a', 2 => 'hu_b', 3 => 'zh_a', 4 => 'zh_b'];
    public $Url = [
        1 => 'http://q.10jqka.com.cn/interfer/stock/fl/zdf/desc/{:page}/sha/quote',
        2 => 'http://q.10jqka.com.cn/interfer/stock/fl/zdf/desc/{:page}/shb/quote',
        3 => 'http://q.10jqka.com.cn/interfer/stock/fl/zdf/desc/{:page}/sza/quote',
        4 => 'http://q.10jqka.com.cn/interfer/stock/fl/zdf/desc/{:page}/szb/quote'
    ];
    //http://q.10jqka.com.cn/stock/fl/#refCountId=qs_fl
    public $fileName='gupiaoOpenClose/';
    public $errorFile='gupiaoOpenClose/';

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
        $this->fileName.='tonghuashun-'.date('Y-m-d').'.txt';
        $this->errorFile.='tonghuashun-'.date('Y-m-d').'.log';
    }

    public function actionRun()
    {
        return $this->getAllContent();
    }

    public function getAllContent()
    {
        if(file_exists($this->fileName)){
            return ['status'=>false,'message'=>'file has exist'];
        }
        $dataHandle=fopen($this->fileName,'a+');
        $logHandle=fopen($this->errorFile,'a+');
        foreach ($this->Url as $key => $url) {
            $emptyTime = 0;
            for ($page = 1; $page < 200; $page++) {
                $content = $this->getOneContent($key, $page);
                if (empty($content) || !is_array($content) || count($content) < 1) {
                    $emptyTime++;
                    fwrite($logHandle,"page $page empty $emptyTime times ");
                    if ($emptyTime > 2) {
                        break;
                    } else {
                        continue;
                    }
                } else {
                    $oneStr='';
                    foreach ($content as $one){
                        $oneStr.=json_encode($one).PHP_EOL;
                    }
                    $result = fwrite($dataHandle,$oneStr);
                    if($result){
                        fwrite($logHandle,"page $page success".PHP_EOL);
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
        $rawArray = Json::decode($content, true);
        if (!isset($rawArray['data']) || !is_array($rawArray['data']) || count($rawArray['data']) < 1 || !isset($rawArray['data'][0]['stockcode'])) {
            LogText::log($content, 'decodeError');
            return false;
        }
        return $rawArray['data'];
    }

}