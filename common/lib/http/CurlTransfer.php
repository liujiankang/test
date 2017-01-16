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
    public $isGetHeard = false;
    public $isSave = false;
    public $oneRequests = 10;
    public $saveSize = 15;//M
    private $startMemory = 0;
    private $content = [];
    private $saveDir = '';

    public function init()
    {
        parent::init();
        $this->saveSize = 50 * 1024 * 1024 * 8;
        empty($saveDir) ? '' : $this->saveDir = '/data/gupiao/tencent/';
    }

    public function test()
    {
        $testUrl = [
            ['url' => "http://www.cnn.com/", 'content' => "http://www.cnn.com/", 'id' => 1, 'name' => 'data/ljk1'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 2, 'name' => 'data/ljk2'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 3, 'name' => 'data/ljk3'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 4, 'name' => 'data/ljk4'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 5, 'name' => 'data/ljk5'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 6, 'name' => 'data/ljk6'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 7, 'name' => 'data/ljk7'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 8, 'name' => 'data/ljk8'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 9, 'name' => 'data/ljk9'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 10, 'name' => 'data/ljk10'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 11, 'name' => 'data/ljk11'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 12, 'name' => 'data/ljk12'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 13, 'name' => 'data/ljk13'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 15, 'name' => 'data/ljk15'],
            ['url' => "http://www.sina.com/", 'content' => "http://www.cnn.com/", 'id' => 18, 'name' => 'data/ljk118'],
            ['url' => "http://www.canada.com/", 'content' => "http://www.cnn.com/", 'id' => 30, 'name' => 'data/ljk30'],
            ['url' => "http://www.yahoo.com/", 'content' => "http://www.cnn.com/", 'id' => 50, 'name' => 'data/ljk50']
        ];
        $this->disPatch($testUrl);
    }

    public function disPatch($urls)
    {
        $this->startMemory = memory_get_usage();
        Yii::trace(['startMem' => $this->startMemory], __METHOD__);
        $blocks = array_chunk($urls, $this->oneRequests);
        $result = [];
        foreach ($blocks as &$one) {
            $content = $this->getMultiContent($one);
            $this->content[] = $content;
            $tempResult = $this->saveContent();
            if ($tempResult && is_array($tempResult) && count($tempResult) > 0) {
                $result = array_merge($result, $this->saveContent());
            }
        }
        $tempResult = $this->saveContent();
        if ($tempResult && is_array($tempResult) && count($tempResult) > 0) {
            $result = array_merge($result, $this->saveContent());
        }
        return $result;
    }

    public function getMultiContent(&$urls)
    {
        Yii::trace([$urls], __METHOD__);
        //return $urls;
        if (!is_array($urls) || count($urls) < 1 || !isset($urls[0]['url'])) {
            Yii::warning(['msg' => 'url format not right', 'url' => $urls], __METHOD__);
            return false;
        }
        $mh = curl_multi_init();
        $conn = [];
        foreach ($urls as $i => $one) {
            $conn[$i] = curl_init();
            if (isset($one['params']) && is_array($one['params'])) {
                if ($this->isGetMethod) {
                    $params = http_build_query($one['params']);
                    $one['url'] .= '?' . $params;//TO DO
                } else {
                    curl_setopt($conn[$i], CURLOPT_POSTFIELDS, $one['params']);
                }
            }
            curl_setopt($conn[$i], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn[$i], CURLOPT_BINARYTRANSFER, 1);
            curl_setopt($conn[$i], CURLOPT_HEADER, $this->isGetHeard);
            //curl_setopt($conn[$i], CURLOPT_BUFFERSIZE, 1 * 1024 * 1024 * 8);
            curl_setopt($conn[$i], CURLOPT_URL, $one['url']);

            curl_multi_add_handle($mh, $conn[$i]);
        }

        do {
            $mrc = curl_multi_exec($mh, $running);
            curl_multi_select($mh, 5);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM || $running > 0);

        foreach ($urls as $i => $one) {
            $rawContent = curl_multi_getcontent($conn[$i]);
            if ($this->isGetHeard) {
                $rawContent = explode("\n\n", $rawContent, 2);
                $urls[$i]['heard'] = $rawContent[0];
                $urls[$i]['content'] = $rawContent[1];
            } else {
                $urls[$i]['content'] = $rawContent;
            }
            curl_multi_remove_handle($mh, $conn[$i]);
        }
        curl_multi_close($mh);
        unset($conn);
        Yii::trace(['oneContent' => $urls[0]], __METHOD__);
        return $urls;
    }

    public function saveContent($isForce = false)
    {
        if (!$isForce) {
            if (($current = $this->getMemoryUsage()) < $this->saveSize) {
                Yii::trace(['Memory is enough ' . $current]);
                return true;
            }
        }
        Yii::trace(['begin write', $this->content], __METHOD__);
        $result = [];
        foreach ($this->content as $content) {
            foreach ($content as $one) {
                $one['name'] = $this->saveDir . (isset($one['dir']) ? $one['dir'] : '') . $one['name'];
                $dir = dirname($one['name']);
                FileHelper::createDirectory($dir);
                if (file_exists($content['name']) && filesize($content['name']) > 0) {
                    //DO something
                    $TemResult = true;
                } else {
                    $handler = fopen($one['name'], 'a+');
                    fwrite($handler, $one['content']);
                    fclose($handler);
                    $TemResult = true;
                }
                $one['result'] = $TemResult;
                if (isset($one['id'])) {
                    $result[$one['id']] = $one['result'];
                } elseif (isset($one['code'])) {
                    $result[$one['code']] = $one['result'];
                } else {
                    unset($one['content']);
                    array_push($result, $one);
                }
            }
        }
        $this->content = [];
        return $result;
    }

    public function getMemoryUsage()
    {
        return $userAge = (memory_get_usage() - $this->startMemory) / 8 / 1024 / 1024;
    }
}