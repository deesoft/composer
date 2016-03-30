<?php
require 'app/password.php';
define(BASE_DIR, __DIR__);

function render($_file_, $_params_ = [])
{
    ob_start();
    ob_implicit_flush(false);
    extract($_params_, EXTR_OVERWRITE);
    require($_file_);
    return ob_get_clean();
}
$app = isset($_GET['app']) ? $_GET['app'] : 'composer';

$result = require(__DIR__ . "/app/{$app}/index.php");

if (is_array($result)) {
    echo render(__DIR__ . '/app/layout.php', $result);
}