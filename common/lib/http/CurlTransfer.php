<?php
namespace common\lib\http;

use yii\base\Component;
use yii\helpers\FileHelper;
use Yii;

class CurlTransfer extends Component
{
    public $url;
    public $params = [];
    public $cookies = [];
    public $isGetMethod = true;
    public $isGetHeard = true;
    public $isSave = false;
    public $oneRequests = 10;
    public $saveSize = 15;//M
    private $startMemory = 0;
    private $content = [];
    private $saveDir = '/data/gupiao/test/';

    public function init()
    {
        $this->saveSize = 50 * 1024 * 1024 * 8;
        parent::init();
    }

    public function test()
    {
        $testUrl = [
            ['url' => "http://www.cnn.com/",'content' => "http://www.cnn.com/", 'id' => 1, 'name' => 'ljk1'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 2, 'name' => 'ljk2'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 3, 'name' => 'ljk3'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 4, 'name' => 'ljk4'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 5, 'name' => 'ljk5'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 6, 'name' => 'ljk6'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 7, 'name' => 'ljk7'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 8, 'name' => 'ljk8'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 9, 'name' => 'ljk9'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 10, 'name' => 'ljk10'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 11, 'name' => 'ljk11'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 12, 'name' => 'ljk12'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 13, 'name' => 'ljk13'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 15, 'name' => 'ljk15'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/",'id' => 18, 'name' => 'ljk118'],
            ['url' => "http://www.canada.com/", 'content' => "http://www.cnn.com/", 'id' => 30, 'name' => 'ljk30'],
            ['url' => "http://www.yahoo.com/", 'content' => "http://www.cnn.com/",'id' => 50, 'name' => 'ljk50']
        ];
        $this->disPatch($testUrl);
    }

    public function disPatch($urls)
    {
        $this->startMemory = memory_get_usage();
        Yii::trace(['startMem' => $this->startMemory], __METHOD__);
        $blocks = array_chunk($urls, $this->oneRequests);
        foreach ($blocks as $key => $one) {
            $content = $this->getMultiContent($one);
            $this->content[] = $content;
            $this->saveContent();
        }
        $this->saveContent(true);
    }

    public function getMultiContent($urls)
    {
        Yii::trace([$urls], __METHOD__);
        //return $urls;
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
            curl_multi_exec($mh, $running);
            usleep(1); // 250000 = 0.25 sec
        } while ($running > 0);

//        do {
//            $mrc = curl_multi_exec($mh, $active);
//        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
//        while ($active and $mrc == CURLM_OK) {
//            if (curl_multi_select($mh) != -1) {
//                do {
//                    $mrc = curl_multi_exec($mh, $active);
//                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
//            }
//        }

        foreach ($urls as $i => $one) {
            $res[$one['id']] = curl_multi_getcontent($conn[$i]);
            curl_close($conn[$i]);
        }
        Yii::trace(['oneContent' => $res[0]], __METHOD__);
        return $res;
    }

    public function saveContent($isForce = false)
    {
        if (!$isForce) {
            if (($current = $this->getMemoryUsage()) < $this->saveSize) {
                Yii::trace(['Memory is enough ' . $current]);
                return true;
            }
        }
        Yii::trace(['begain write', $this->content], __METHOD__);
        foreach ($this->content as $content) {
            foreach ($content as $one) {
                $dir = dirname($one['name']);
                FileHelper::createDirectory($dir);
                $handler = fopen($one['name'], 'a+');
                fwrite($handler, $one['content']);
                fclose($handler);
            }
        }
        $this->content = [];
        return true;
    }

    public function getMemoryUsage()
    {
        return $userAge = (memory_get_usage() - $this->startMemory) / 8 / 1024 / 1024;
    }
}