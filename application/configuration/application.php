<?php
$scheme = isHttps() ? 'https' : 'http';
$host = getHost();

define('BASE_URL', $scheme . '://' . $host);
define('BASE_PATH', realpath(dirname(__FILE__) . '/../../') . '/');
define('CURRENT_YEAR', date('Y'));
