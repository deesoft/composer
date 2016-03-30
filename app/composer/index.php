<?php
$scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);

function execute($scriptDir)
{
    $targetDir = rtrim($scriptDir . '/' . ltrim($_POST['dir'], '/'), '/');
    require 'install.php';
    composerInstall($targetDir);
    exit();
}
if (isset($_POST['action']) && $_POST['action'] == 'install') {
    execute($scriptDir);
    return false;
}

return[
    'title' => 'Composer Install',
    'content' => render(__DIR__ . '/content.php', ['scriptDir' => $scriptDir]),
    'script' => render(__DIR__ . '/script.js'),
];
