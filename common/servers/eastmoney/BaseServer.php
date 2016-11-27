<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 21:38
 */

namespace common\servers\eastmoney;
use yii\base\Component;

class BaseServer extends Component
{
    public $from='eastmoney';
    const TYPE_SHANG_A = 1;
    const TYPE_SHANG_B = 2;
    const TYPE_SHEN_A = 3;
    const TYPE_SHEN_B = 4;
}