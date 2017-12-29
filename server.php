<?php

$scheme   = $_SERVER['REQUEST_SCHEME'];
$httpHost = $_SERVER['HTTP_HOST'];

$scriptFileName = $_SERVER['SCRIPT_FILENAME'];
$rootPath       = dirname( dirname($scriptFileName));

$requestUri = $_SERVER['REDIRECT_URL'];
$phpSelf    = $_SERVER['PHP_SELF'];
$phpSelf    = dirname( dirname($phpSelf));

$host   = "{$scheme}://{$httpHost}{$phpSelf}/";
$branch = str_replace("{$phpSelf}/", '', $requestUri);
$branch = trim($branch, '/');

/* host da url atual */
define('HOST', $host);

/* branch da url */
define('BRANCH', $branch);
