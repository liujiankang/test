<?php
namespace common\lib\http;
class PhpTransfer
{
    public $url;
    public $params = [];
    public $heads = [];
    public $cookies = [];

    public function __construct($url = '', $params = [])
    {
        $this->url = $url;
        $this->params = $params;
    }

    public function init()
    {

    }

    public function getMultiContent($params=false,$urls=false,$isHead=false){
        $connomains = array(
            "http://www.cnn.com/",
            "http://www.canada.com/",
            "http://www.yahoo.com/"
        );

        $mh = curl_multi_init();

        foreach ($connomains as $i => $url) {
            $conn[$i]=curl_init($url);
            curl_setopt($conn[$i],CURLOPT_RETURNTRANSFER,1);
            curl_multi_add_handle ($mh,$conn[$i]);
        }

        do {
            $mrc = curl_multi_exec($mh,$active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
        while ($active and $mrc == CURLM_OK) {
            if (curl_multi_select($mh) != -1) {
                do {
                    $mrc = curl_multi_exec($mh, $active);
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }

        foreach ($connomains as $i => $url) {
            $res[$i]=curl_multi_getcontent($conn[$i]);
            curl_close($conn[$i]);
        }

        print_r($res);
    }

    public function getContent($params = null, $url = null, $isHeard = false)
    {
        if (!empty($url)) {
            $this->url = $url;
        }
        if (!empty($params) && count($params) >= 1) {
            $this->params = array_merge($this->params, $params);
        }
        if (count($this->params) >= 1) {
            $requestUrl = $this->url . '?' . http_build_query($this->params);
        } else {
            $requestUrl = $this->url;
        }
        $content = file_get_contents($requestUrl);
        $heard = $http_response_header;
        if ($isHeard) {
            return ['heard' => $heard, 'content' => $content];
        } else {
            return $content;
        }
    }

    public function postContent($params = null, $url = null, $isHeard = false)
    {
        if (!empty($url)) {
            $this->url = $url;
        }
        if (!empty($params) && count($params) > 0) {
            $this->params = array_merge($this->params, $params);
        }

        $data = http_build_query($this->params);
        $opts = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-type: application/x-www-form-urlencoded" .
                    "Content-Length: " . strlen($data) . "",
                'content' => $data
            ),
        );
        $handler = stream_context_create($opts);
        $content = file_get_contents($this->url, false, $handler);
        $heard = $http_response_header;
        if ($isHeard) {
            return ['heard' => $heard, 'content' => $content];
        } else {
            return $content;
        }
    }
}