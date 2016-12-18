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
    function disguise_curl($url)
    {
        $curl = curl_init();
        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $header[] = "Accept-Language: en-us,en;q=0.5";
        $header[] = "Pragma: "; // browsers keep this blank.

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_REFERER, 'http://www.google.com');
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($curl, CURLOPT_AUTOREFERER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 100);

        $html = curl_exec($curl); // execute the curl command
        curl_close($curl); // close the connection

        return $html; // and finally, return $html
    }

}