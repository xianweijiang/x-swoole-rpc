<?php
// +----------------------------------------------------------------------
// | LoggerInterface.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Xin\Swoole\Rpc;

use Exception;

interface LoggerInterface
{
    public function info(array $request, array $response);

    public function error(array $request, array $response, Exception $ex);
}