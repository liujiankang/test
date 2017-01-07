<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/27
 * Time: 21:38
 */

namespace common\servers\tonghuashun;
use common\servers\BaseService;

class BaseServer extends BaseService
{
    public $from = 'tonghuashun';
    const TYPE_SHANG_A = 1;
    const TYPE_SHANG_B = 2;
    const TYPE_SHEN_A = 3;
    const TYPE_SHEN_B = 4;
}