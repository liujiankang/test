<?php
namespace common\servers\eastmoney;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 18:37
 */
use common\lib\http\PhpTransfer;
use common\servers\eastmoney\BaseServer;

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
        if(!empty($type)){
            return $this->getOneContent($type,$page,true);
        }else{
            return $this->getAllContent();
        }
    }

    public function getAllContent()
    {
        foreach ($this->Url as $key => $val) {
            for ($page = 1; $page < 100; $page++) {
                $content = $this->getOneContent($key, $page);
            }
        }
    }

    public function getOneContent($type, $page)
    {
        $url = $this->getUrl($type, $page);
        $this->getContent();
    }

    public function getContent()
    {
        $content = $this->httpOperator->getContent();
        var_dump($content);
    }

    //
    public function getUrl($type, $page)
    {
        $url = $this->Url[$type];
        return $this->requestUrl = str_replace(':page', $page, $url);
    }

}