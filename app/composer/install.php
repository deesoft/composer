<?php
require BASE_DIR . '/vendor/autoload.php'; // require composer dependencies

use Composer\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\Output;

function composerInstall($dir)
{
    $installed = $dir . '/vendor/composer/installed.json';
    if (is_file($installed) && empty(trim(file_get_contents($installed)))) {
        unlink($installed);
    }

    putenv('COMPOSER_HOME=' . BASE_DIR . '/home');
    chdir($dir);
    $output = new EchoOutput();
    // call `composer install` command programmatically
    $input = new ArrayInput(['install', '--prefer-dist' => true, '--no-dev' => true, '--no-progress' => true]);
    $application = new Application();
    $application->setAutoExit(false); 
    $application->run($input, $output);
}

function installFxp()
{
    putenv('COMPOSER_HOME=' . BASE_DIR . '/home');
    $output = new EchoOutput();
    // call `composer install` command programmatically
    $input = new ArrayInput(['global', 'require', 'fxp/composer-asset-plugin:~1.1.1',
        '--prefer-dist' => true, '--no-dev' => true, '--no-progress' => true]);
    $application = new Application();
    $application->setAutoExit(false); 
    $application->run($input, $output);
}

class EchoOutput extends Output
{

    protected function doWrite($message, $newline)
    {
        echo $message;
        if ($newline) {
            echo "\n";
        }
    }
}
