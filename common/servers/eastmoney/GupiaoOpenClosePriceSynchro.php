<?php
namespace common\servers\eastmoney;

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
        1 => 'http://nufm.dfcfw.com/EM_Finance2014NumericApplication/JS.aspx?type=CT&cmd=C.2&sty=FCOIATA&sortType=C&sortRule=-1&page={:page}&pageSize=20&js=var%20quote_123%3d{rank:[(x)],pages:(pc)}&token=7bc05d0d4c3c22ef9fca8c2a912d779c&jsName=quote_123&_g=0.3394198580645025',
        2 => 'http://nufm.dfcfw.com/EM_Finance2014NumericApplication/JS.aspx?type=CT&cmd=C.3&sty=FCOIATA&sortType=C&sortRule=-1&page={:page}&pageSize=20&js=var%20quote_123%3d{rank:[(x)],pages:(pc)}&token=7bc05d0d4c3c22ef9fca8c2a912d779c&jsName=quote_123&_g=0.17958721076138318',
        3 => 'http://nufm.dfcfw.com/EM_Finance2014NumericApplication/JS.aspx?type=CT&cmd=C._SZAME&sty=FCOIATA&sortType=C&sortRule=-1&page={:page}&pageSize=20&js=var%20quote_123%3d{rank:[(x)],pages:(pc)}&token=7bc05d0d4c3c22ef9fca8c2a912d779c&jsName=quote_123&_g=0.5678978131618351',
        4 => 'http://nufm.dfcfw.com/EM_Finance2014NumericApplication/JS.aspx?type=CT&cmd=C.7&sty=FCOIATA&sortType=C&sortRule=-1&page={:page}&pageSize=20&js=var%20quote_123%3d{rank:[(x)],pages:(pc)}&token=7bc05d0d4c3c22ef9fca8c2a912d779c&jsName=quote_123&_g=0.6932763059157878'
    ];
    //http://quote.eastmoney.com/center/list.html#21
    public $fileName='gupiaoOpenClose/';
    public $errorFile='gupiaoOpenClose/';

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
        $this->fileName.='eastmoney-'.date('Y-m-d').'.txt';
        $this->errorFile.='eastmoney-'.date('Y-m-d').'.log';
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
                if($page==199){
                    fwrite($logHandle,json_encode($content));
                }
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
                $sleep = rand(2, 3);
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
        try{
            return $content = $this->httpOperator->getContent($params, $url);
        }catch (\Exception $e){
            return false;
        }
    }


    public function getUrl($type, $page)
    {
        $url = $this->Url[$type];
        return $this->requestUrl = str_replace('{:page}', $page, $url);
    }

    public function gpCodeDecode($content)
    {
        if(empty($content) || strlen($content)<10){
            return false;
        }
        //$content= iconv("gb2312", "UTF-8" , $content);
        //$content= iconv("GBK", "UTF-8//TRANSLIT" , $content);
        //strpos($content,'{');
        $content=substr($content,strlen("var quote_123="));
        $content=str_replace('pages',"\"pages\"",$content);
        $content=str_replace('rank',"\"rank\"",$content);
        //return [$content];
        $content = mb_convert_encoding($content, "UTF-8");
        //$content= iconv("gb18030", "utf-8//TRANSLIT" , $content);
        $rawArray = Json::decode($content, true);
        //var_dump($rawArray);die;
        if (!isset($rawArray['rank']) || !is_array($rawArray['rank']) || count($rawArray['rank']) < 1) {
            LogText::log($content, 'decodeError');
            return false;
        }
        return $rawArray['rank'];
    }

}