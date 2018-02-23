<?php

use App\Controller\IndexController;
use App\Service\Logger\ILogger;
use App\Service\Logger\Logger;
use App\Service\Random\Microtime;
use App\Service\Random\Random;
use App\Service\Random\Uniqid;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

// Container creation
$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    ILogger::class => DI\get(Logger::class),
    'random'       => DI\get(Random::class),
    'uniqid'       => DI\get(Uniqid::class),
    'microtime'    => DI\get(Microtime::class),
]);
$container = $builder->build();

$controller = new IndexController($container->get('random'));
dump($controller->getRandomAction());

$controller = new IndexController($container->get('uniqid'));
dump($controller->getRandomAction());

$controller = new IndexController($container->get('microtime'));
dump($controller->getRandomAction());