#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

define('WEBPATH', __DIR__);
Swoole\Loader::vendorInit();
Swoole\Loader::addNameSpace('phpx', __DIR__.'/src');

$application = new Application();
$application->add(new phpx\Command\Create());
$application->add(new phpx\Command\Build());
$application->add(new phpx\Command\Run());
$application->add(new phpx\Command\Clean());
$application->add(new phpx\Command\Install());
$application->run();
