<?php
namespace common\lib\http;

use yii\helpers\FileHelper;
use Yii;

class WgetTransfer
{
    const STATUS_FAIL = false;
    const STATUS_TIMEOUT = -1;
    const STATUS_SUCCESS = 0;

    const TEST_DOWN_BY_NUM = 1;
    const TEST_DOWN_BY_PID = 2;

    static $pids = [];
    public $url;
    public $ignoreNumber = 2;
    public $saveDir;
    public $params = [];
    public $heads = [];
    public $cookies = [];
    public $timeOut = 200;//second
    public $testInterval = 5;//second
    public $testTimes = 6000;//second
    public $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16";

    public function init($saveDir = '/data/gupiao/', $timeOut = '')
    {
        empty($saveDir) ? '' : $this->saveDir = $saveDir;
        empty($timeOut) ? '' : $this->timeOut = $timeOut;
    }

    /**
     * @param $urls array['key'=>['name',url]]
     *
     * */
    public function getMultiContent($urls, $isWait = false)
    {
        if (!is_array($urls)) {
            return self::STATUS_FAIL;
        }

        foreach ($urls as $key => $url) {
            isset($url['dir']) ? '' : $url['dir'] = '';
            if (isset($url['name'])) {
                $name = $this->saveDir . $url['dir'] . $url['name'];
            } else {
                $name = $this->saveDir . $url['dir'] . $key;
            }
            $downUrl = $url['url'];
            $urls[$key]['result'] = $this->getContent($downUrl, $name);
        }
        if ($isWait) {
            //(array_column($urls, 'result'));
            return $this->testDownloadIsDone(self::TEST_DOWN_BY_PID, array_column($urls, 'result'));
        } else {
            return $urls;
        }
    }

    public function getContent($downUrl, $name, $logFile = null)
    {
        if (empty($downUrl)) {
            return false;
        }
        if (file_exists("'$name'") == 1 || is_file($name)) {
            print ($name . ' already exist' . PHP_EOL);
            return true;
        }
        $dir = dirname($name);
        if (!is_dir($dir)) {
            try {
                Yii::info(['mkdir' => $dir], __CLASS__);
                FileHelper::createDirectory($dir);
                //mkdir($dir, 0777, true);
            } catch (\Exception $e) {
                throw $e;
            }
        }
        if (empty($logFile)) {
            $logfile = $dir . "/gupiao.log";
        }

        $command = "wget -nv -bO '$name' -a '$logfile' -A txt --user-agent=\"{:userAgent}\" '$downUrl' |grep pid";
        $command = str_replace('{:userAgent}', $this->userAgent, $command);
        //print $command;
        $result = exec($command);
        if (empty($result) || strpos($result, 'pid') === false || !preg_match('/\d{4,10}/', $result, $arr)) {
            //die(1);
            return false;
        } else {
            if (isset($arr[0]) && is_numeric($arr[0])) {
                return $arr[0];
            } else {
                //die(2);
                return false;
            }
        }
    }

    public function testDown()
    {
        $urls = [
            'save1' => ['name' => 'data/test1', 'url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            'save2' => ['name' => 'data/test2', 'url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            'save3' => ['name' => 'data/test3', 'url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            //'save4' => ['url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            //'save5' => ['url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            'save6' => ['name' => 'data/test6', 'url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
            'save7' => ['name' => 'data/test7', 'url' => 'http://59.109.99.45/IXC9ceef41bc18e8a0282686ca1067a8ff4/1373531451/down/Thunder5.9.28.1564.zip'],
        ];
        return $this->getMultiContent($urls, true);
    }

    public function postContent($params = null, $url = null, $isHeard = false)
    {

    }

    public function testDownloadIsDone($by = 2, $data = null)
    {
        if ($by == self::TEST_DOWN_BY_NUM) {
            return $this->testDoneByNum($this->ignoreNumber);
        } else {
            return $this->testDoneByPid($data, $this->ignoreNumber);
        }
    }

    //通过wget进程的数量判断
    public function testDoneByNum($num = 2)
    {
        $time = time();
        $testCommand = 'ps aux |grep wget|wc -l';
        for ($i = 0; $i < $this->testTimes; $i++) {
            sleep($this->testInterval);
            if (time() - $time > $this->timeOut) {
                return self::STATUS_TIMEOUT;
            }
            $result = exec($testCommand);
            if ($result <= $num) {
                return self::STATUS_SUCCESS;
            }
        };
        return self::STATUS_TIMEOUT;
    }

    //通过下载的pid数量判断
    private function testDoneByPid($pids, $ignoreNumber = 0)
    {
        $time = time();
        $Command = "ps aux | awk '{print $2}' |grep {:pid}";
        $done = [];
        $tempid = [];
        foreach ($pids as $pid) {
            if ($pid > 1) {
                array_push($tempid, $pid);
            }
        }
        
        if (is_array(static::$pids) && count(static::$pids) > 0 && count($tempid) > 0) {
            $tempid = array_merge($tempid, static::$pids);
        }

        for ($i = 0; $i < $this->testTimes; $i++) {
            sleep($this->testInterval);
           
            if (count($tempid) < $ignoreNumber + 1) {
                if (is_array($tempid) && count($tempid) > 1) {
                    static::$pids = array_merge(static::$pids, $tempid);
                }
                return self::STATUS_SUCCESS;
            }

            if (time() - $time > $this->timeOut) {
                if(count($tempid)>0){
                    foreach ($tempid as $key => $pid) {
                        $timeout[]=exec("ps aux |grep $pid");
                    }
                    Yii::warning(['timeout' => $timeout], __CLASS__);
                }
                return self::STATUS_TIMEOUT;
            }
            
            foreach ($tempid as $key => $pid) {
                $testCommand = str_replace('{:pid}', $pid, $Command);
                $result = exec($testCommand);
                if ($result == '') {
                    $done[$pid] = true;
                    unset($tempid[$key]);
                } else {
                    print($result . "-$i|");
                }
            }
        }
        return self::STATUS_TIMEOUT;
    }
    /*
     * -a<日志文件>：在指定的日志文件中记录资料的执行过程；
     *  -A<后缀名>：指定要下载文件的后缀名，多个后缀名之间使用逗号进行分隔；
     * -b：进行后台的方式运行wget；
     * -B<连接地址>：设置参考的连接地址的基地地址；
     * -c：继续执行上次终端的任务；
     * -C<标志>：设置服务器数据块功能标志on为激活，off为关闭，默认值为on；
     * -d：调试模式运行指令； -D<域名列表>：设置顺着的域名列表，域名之间用“，”分隔；
     * -e<指令>：作为文件“.wgetrc”中的一部分执行指定的指令；
     * -h：显示指令帮助信息；
     * -i<文件>：从指定文件获取要下载的URL地址；===============
     * -l<目录列表>：设置顺着的目录列表，多个目录用“，”分隔；
     * -L：仅顺着关联的连接；
     * -r：递归下载方式；
     * -nc：文件存在时，下载文件不覆盖原有文件；
     * -nv：下载时只显示更新和出错信息，不显示指令的详细执行过程；
     * -q：不显示指令执行过程； -nh：不查询主机名称；
     * -v：显示详细执行过程；
     * -V：显示版本信息；
     * --passive-ftp：使用被动模式PASV连接FTP服务器；
     * --follow-ftp：从HTML文件中下载FTP连接文件。
     * 下载并以不同的文件名保存 wget -O wordpress.zip http://www.linuxde.net/download.aspx?id=1080
     *  wget限速下载 wget --limit-rate=300k http://www.linuxde.net/testfile.zip
     * 使用wget断点续传 wget -c http://www.linuxde.net/testfile.zip
     * 伪装代理名称下载 wget --user-agent="Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16" http://www.linuxde.net/testfile.zip
     *  测试下载链接 当你打算进行定时下载，你应该在预定时间测试下载链接是否有效。我们可以增加--spider参数进行检查。 wget --spider URL
     * 增加重试次数 wget --tries=40 URL
     * 过滤指定格式下载 wget --reject=gif ur   下载指定格式文件 wget -r -A.pdf url
     * FTP下载 wget ftp-url wget --ftp-user=USERNAME --ftp-password=PASSWORD url
     * 来自: http://man.linuxde.net/wget
     * */
}