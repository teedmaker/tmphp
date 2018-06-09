<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);
define('METHOD', $method);

$phpSelf  = dirname($_SERVER['PHP_SELF'], 2);
$host     = "{$_SERVER['HTTP_HOST']}{$phpSelf}";
$host     = str_replace('//', '/', $host);
$host     = trim($host, '/');
$host     = "{$_SERVER['REQUEST_SCHEME']}://{$host}/";
define('HOST', $host);

$rootPath = dirname($_SERVER['SCRIPT_FILENAME'], 2);
$base = "{$rootPath}/";
define('BASE', $base);

$branch = str_replace("{$phpSelf}/", '', $_SERVER['REQUEST_URI']);
$branch = trim($branch, '/');
$branch = empty($branch)? '/': $branch;
define('BRANCH', $branch);

$core = dirname(__FILE__, 2);
$core = str_replace('\\', '/', $core) . '/';
define('CORE', $core);
