<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>welcome to admin controller</h1>
        <p>
            <a class="btn btn-lg btn-success" href="/debug" target="_blank">go to debug</a>
            <a class="btn btn-lg btn-success" href="/gii" target="_blank">go to gii</a>
            <a class="btn btn-lg btn-success" href="/system/yii-log/index?s=%2Fsystem%2Fyii-log&sort=-id" target="_blank">go to log</a>
        </p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-success"  href="/runconf/holiday-raw">股票节假日</a></p>
                <p>
                    <a class="btn btn-success" href="/runconf/holiday-real">股票交易日</a>
                    <a class="btn btn-danger" href="/runconf/holiday-real/gupiao-day-syn">更新股票交易日</a>
                </p>
                <p><a class="btn btn-danger" href="/runconf/runtime">运行配置</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <pre>ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDyFEYrh2N5g9VoQkJSCJvMqHZy+HCSEmkToz7avGMm43C63Hd2JlI9WKj0JLUDMgUsi4xGXGO3pgfMtPq34nt4ELoSEDI6nuucnIJujHQ5I9wCgbnTxnluQM4BXZvSodnPTmygaN3Wt17owkhQOJ2IZAF/dDXsGnFJIB5tpYn7+CxMrz3cL3ZlgiAoYmwc17kLM55iWj4zlE8m1Z+Gnse2oYZrft2LWUZ5naud82xeD2rYVRdHNvXe0fnc4xdMuh9qZNvIooYxaG8izf918HhL52Glhrpi35EFJWmlm7dngMyIo6Vlix1KhLLg4DKXPXgK0ZTIy9pbE9ThUKdOD8gD Administrator@YF1ZIGFTKXKMACJ
                </pre>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
