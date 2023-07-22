#!/usr/bin/env php
<?php
declare(strict_types=1);

require_once (__DIR__ . '/vendor/autoload.php');

define('ENVAROMENT', 'dev');
define('BASE_APP_DIR', __DIR__);

$host = [
    'host' => '0.0.0.0',
    'port' => 9501
];

$config = [
    'worker_num' => 2,
    'daemonize' => false,
    'max_request' => 10000,
    'dispatch_mode' => 2,
    'debug_mode'=> 1,
    'log_level' => 0,
    'enable_coroutine' => true,
    'open_http_protocol' => true,
    'open_http2_protocol' => true,
    'log_file' => '/var/log/supervisor/swoole/swoole_http_server.log',
];

include_once __DIR__ . '/vendor/bin/httpServer.php';
