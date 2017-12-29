<?php

$scheme   = $_SERVER['REQUEST_SCHEME'];
$httpHost = $_SERVER['HTTP_HOST'];

$scriptFileName = $_SERVER['SCRIPT_FILENAME'];
$rootPath       = dirname($scriptFileName, 2);

$base = "{$rootPath}/";

$requestUri = $_SERVER['REDIRECT_URL'];
$phpSelf    = $_SERVER['PHP_SELF'];
$phpSelf    = dirname($phpSelf, 2);

$host   = "{$scheme}://{$httpHost}{$phpSelf}/";
$branch = str_replace("{$phpSelf}/", '', $requestUri);
$branch = trim($branch, '/');

/* host da url atual */
define('HOST', $host);

/* base do projeto */
define('BASE', $base);

/* branch da url */
define('BRANCH', $branch);

####

require_once 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__, '.env');
$dotenv->load();

// getenv('APP_ENV')
