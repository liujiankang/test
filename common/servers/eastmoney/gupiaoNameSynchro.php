<?php
namespace common\servers\eastmoney;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use common\lib\http\PhpTransfer;
use common\lib\log\LogText;
use common\models\gupiao\GupiaoCode;
use common\servers\eastmoney\BaseServer;
use yii\debug\models\search\Debug;
use yii\helpers\Json;
use yii\log\Logger;
use yii\web\JsonParser;

class GupiaoNameSynchro extends BaseServer
{

    public $httpOperator;
    public $requestUrl = '';
    public $shortNameMap = [1 => 'hu_a', 2 => 'hu_b', 3 => 'zh_a', 4 => 'zh_b'];
    public $Url = [
        1 => 'http://q.10jqka.com.cn/interface/stock/fl/zdf/desc/{:page}/sha/quote',
        2 => 'http://q.10jqka.com.cn/interface/stock/fl/zdf/desc/{:page}/shb/quote',
        3 => 'http://q.10jqka.com.cn/interface/stock/fl/zdf/desc/{:page}/sza/quote',
        4 => 'http://q.10jqka.com.cn/interface/stock/fl/zdf/desc/{:page}/szb/quote'
    ];

    public function init()
    {
        parent::init();
        $this->httpOperator = new PhpTransfer();
    }

    public function actionRun($type = null, $page = 1)
    {
        if (!empty($type)) {
            return $this->getOneContent($type, $page);
        } else {
            return $this->getAllContent();
        }
    }

    public function getAllContent()
    {
        foreach ($this->Url as $key => $url) {
            $emptyTime = 0;
            for ($page = 1; $page < 100; $page++) {
                $content = $this->getOneContent($key, $page);
                if (empty($content) || !is_array($content) || count($content)<1) {
                    $emptyTime++;
                    if ($emptyTime > 2) {
                        break;
                    } else {
                        continue;
                    }
                }else{
                    $result= $this->updateGpCode($key,$content);
                    if($result===false){
                        $emptyTime++;
                        LogText::log($content,'addCodeError');
                    }else{
                        echo "succsess add $result codes";
                    }
                }
                LogText::log($content,'content');
                var_dump(end($content));
                $sleep=rand(0,4);
                sleep($sleep);
            }
        }
    }

    public function getOneContent($type, $page)
    {
        $url = $this->getUrl($type, $page);
        $rawContent = $this->getContent($url);
        return $gpArray= $this->gpCodeDecode($rawContent);
    }

    public function getContent($url = null, $params = null)
    {
        return $content = $this->httpOperator->getContent($params, $url);
    }

    public function updateGpCode($type,$codeArray){
        $gupiaoCodes=GupiaoCode::find()
            ->select('code')
            ->where(['type'=>$type,'code'=>$codeArray])
            ->asArray()
            ->column();
        $addCodes=[];
        if($gupiaoCodes && is_array($gupiaoCodes) && count($gupiaoCodes)>0){
            foreach ($codeArray as $code){
                if(!in_array($code,$gupiaoCodes)){
                    array_push($addCodes,[$code,$type]);
                }
            }
        }else{
            foreach ($codeArray as $code){
                array_push($addCodes,[$code,$type]);
            }
        }

        if(count($addCodes)>1){
            return GupiaoCode::find()
                ->createCommand()
                ->batchInsert(GupiaoCode::tableName(),['code','type'],$addCodes)
                ->execute();
        }
        return 0;
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
        $content= mb_convert_encoding ($content, "UTF-8");
        //$content= iconv("gb18030", "utf-8//TRANSLIT" , $content);
        $rawArray = Json::decode($content, true);
        if (!isset($rawArray['data']) || !is_array($rawArray['data']) || count($rawArray['data']) < 1 || !isset($rawArray['data'][0]['stockcode'])) {
            LogText::log($content, 'decodeError');
            return false;
        }
        return $data = array_column($rawArray['data'],'stockcode');
    }

}