<?php
defined('MY_USER') or define('MY_USER', 'admin');
defined('MY_PASS') or define('MY_PASS', 'admin');

if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== MY_USER || $_SERVER['PHP_AUTH_PW'] !== MY_PASS) {
    header('WWW-Authenticate: Basic realm="Composer"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}