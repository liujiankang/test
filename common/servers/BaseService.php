<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 22:56
 */
namespace common\servers;

use yii\base\Component;
use Yii;

class BaseService extends Component
{

    public $runningKey = '';

    //指定的$key是否存在，存在则证明在运行
    public function init()
    {
        parent::init();
        $this->runningKey = md5(__CLASS__);
    }

    public function isRunning($key = null)
    {
        if (empty($key)) {
            $key = $this->runningKey;
        }
        return Yii::$app->cache->get($key);
    }

    public function runningTouch($key, $keepTime = 600)
    {
        if (empty($key)) {
            $key = $this->runningKey;
        }
        Yii::$app->cache->set($key, time(), $keepTime);
    }

}