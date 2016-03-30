<?php
require BASE_DIR . '/vendor/autoload.php'; // require composer dependencies

use Composer\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\Output;

function runComposer($dir, $command)
{
    $installed = $dir . '/vendor/composer/installed.json';
    if (is_file($installed) && empty(trim(file_get_contents($installed)))) {
        unlink($installed);
    }
    putenv('COMPOSER_HOME=' . BASE_DIR . '/home');
    chdir($dir);
    $output = new EchoOutput();
    $input = [$command];
    if ($command == 'global') {
        array_push($input, 'require', 'fxp/composer-asset-plugin:~1.1.1');
    } else {
        $input = array_merge($input, ['--prefer-dist' => true, '--no-dev' => true, '--no-progress' => true]);
    }

    $input = new ArrayInput($input);
    $application = new Application();
    $application->setAutoExit(false);
    $application->run($input, $output);
}

class EchoOutput extends Output
{

    /**
     * @inheritdoc
     */
    protected function doWrite($message, $newline)
    {
        echo $message, $newline ? "\n" : '';
    }
}
