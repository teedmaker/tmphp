<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);
define('METHOD', $method);

$requestUri = $_SERVER['REDIRECT_URL'];
$phpSelf    = $_SERVER['PHP_SELF'];
$phpSelf    = dirname($phpSelf, 2);

$scheme   = $_SERVER['REQUEST_SCHEME'];
$httpHost = $_SERVER['HTTP_HOST'];
$host   = "{$scheme}://{$httpHost}{$phpSelf}/";
define('HOST', $host);

$scriptFileName = $_SERVER['SCRIPT_FILENAME'];
$rootPath       = dirname($scriptFileName, 2);
$base = "{$rootPath}/";
define('BASE', $base);

$branch = str_replace("{$phpSelf}/", '', $requestUri);
$branch = trim($branch, '/');
$branch = empty($branch)? '/': $branch;
define('BRANCH', $branch);

$core = dirname(__FILE__, 2);
$core = str_replace('\\', '/', $core) . '/';
define('CORE', $core);
