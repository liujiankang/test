<?php
namespace common\lib\http;

use yii\base\Component;
use Yii;

class PhpTransfer extends Component
{
    public $url;
    public $params = [];
    public $cookies = [];
    public $isGetMethod = true;
    public $isGetHeard = true;
    public $isSave = false;
    public $oneRequests = 10;
    public $saveSize = 0;
    private $memory = 0;
    private $content = 0;

    public function init()
    {
        $this->saveSize = 50 * 1024 * 1024;
        parent::init();
    }

    public function test()
    {
        $testUrl = [
            ['url' => "http://www.cnn.com/", 'id' => 2],
            ['url' => "http://www.canada.com/", 'id' => 3],
            ['url' => "http://www.yahoo.com/", 'id' => 5]
        ];
        $this->getMultiContent($testUrl);
    }

    public function disPatch($urls)
    {
        $blocks = array_chunk($urls, $this->oneRequests);
        foreach ($blocks as $one) {
            
        }
    }

    public function getMultiContent($urls)
    {
        if (!is_array($urls) && !isset($urls[0]['url'])) {
            Yii::warning(['msg' => 'url format not right', 'url' => $urls], __METHOD__);
            return false;
        }
        $mh = curl_multi_init();
        foreach ($urls as $i => $one) {
            $conn[$i] = curl_init($one['url']);
            curl_setopt($conn[$i], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn[$i], CURLOPT_HEADER, $this->isGetHeard);
            if (!$this->isGetMethod && isset($one['params']) && is_array($one['params'])) {
                curl_setopt($conn[$i], CURLOPT_POSTFIELDS, $one['params']);
            }
            curl_multi_add_handle($mh, $conn[$i]);
        }
        do {
            $mrc = curl_multi_exec($mh, $active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
        while ($active and $mrc == CURLM_OK) {
            if (curl_multi_select($mh) != -1) {
                do {
                    $mrc = curl_multi_exec($mh, $active);
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }

        foreach ($urls as $i => $one) {
            $res[$one['id']] = curl_multi_getcontent($conn[$i]);
            curl_close($conn[$i]);
        }
        Yii::trace(['oneContent' => $res[0]], __METHOD__);
        return $res;
    }

    public function saveContent()
    {

    }

    public function getMemoryUsage()
    {

    }
}