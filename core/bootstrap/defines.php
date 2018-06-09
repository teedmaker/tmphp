<?php

// getting a method from actual access (e.g.: get/post/put/delete)
$method = strtolower($_SERVER['REQUEST_METHOD']);
define('METHOD', $method);

// getting actual host
$phpSelf  = dirname($_SERVER['PHP_SELF'], 2);
$host     = "{$_SERVER['HTTP_HOST']}{$phpSelf}";
$host     = str_replace('//', '/', $host);
$host     = trim($host, '/');
$host     = "{$_SERVER['REQUEST_SCHEME']}://{$host}/";
define('HOST', $host);

// getting path from general files
$base = dirname($_SERVER['SCRIPT_FILENAME'], 2) . '/';
define('BASE', $base);

// getting path from core of this project
$core = BASE . 'core/';
define('CORE', $core);

// getting actual branch (e.g.: site.com/my/actual/branch)
$branch = str_replace("{$phpSelf}/", '', $_SERVER['REQUEST_URI']);
$branch = trim($branch, '/');
$branch = empty($branch)? '/': $branch;
define('BRANCH', $branch);
