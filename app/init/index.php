<?php
$scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);

function execute($scriptDir, $env, $overwrite)
{
    $targetDir = rtrim($scriptDir . '/' . ltrim($_POST['dir'], '/'), '/');

    $_SERVER['argv'] = ['', "--env={$env}", "--overwrite={$overwrite}"];
    chdir($targetDir);
    require $targetDir . '/init';
    exit();
}

if (isset($_POST['action']) && $_POST['action'] == '1') {
    $env = empty($_POST['env']) ? 'Production' : $_POST['env'];
    $overwrite = empty($_POST['overwrite']) ? 'n' : $_POST['overwrite'];
    execute($scriptDir, $env, $overwrite);
    return false;
}

return[
    'title' => 'Application Init',
    'content' => render(__DIR__ . '/content.php', ['scriptDir' => $scriptDir]),
    'script' => render(__DIR__ . '/script.js'),
];
