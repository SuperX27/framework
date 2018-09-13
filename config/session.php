<?php

// +----------------------------------------------------------------------
// | framework
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://framework.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/framework
// +----------------------------------------------------------------------

/* 定义会话路径 */
$path = env('runtime_path') . 'sess' . DIRECTORY_SEPARATOR;
file_exists($path) || mkdir($path, 0755, true);
$name = 's' . substr(md5(__DIR__), -8);

/* 配置会话参数 */
return [
    'prefix'         => 'ta',
    'auto_start'     => true,
    'path'           => $path,
    'name'           => $name,
    'var_session_id' => $name,
];