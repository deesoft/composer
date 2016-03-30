<?php
$scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);

function execute($scriptDir)
{
    $targetDir = rtrim($scriptDir . '/' . ltrim($_POST['dir'], '/'), '/');
    require 'install.php';
    runComposer($targetDir,$_POST['command']);
    exit();
}
if (isset($_POST['action']) && $_POST['action'] == '1') {
    execute($scriptDir);
    return false;
}

return[
    'title' => 'Composer Install',
    'content' => render(__DIR__ . '/content.php', ['scriptDir' => $scriptDir]),
    'script' => render(__DIR__ . '/script.js'),
];
