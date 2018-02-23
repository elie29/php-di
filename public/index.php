<?php

use App\Controller\IndexController;
use App\Service\Logger\ILogger;
use App\Service\Logger\Logger;
use App\Service\Random\Microtime;
use App\Service\Random\Random;
use App\Service\Random\Uniqid;
use Psr\Container\ContainerInterface;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

// Container creation
$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    // Logger is created even if it isn't used
    ILogger::class => new Logger(),
    // Using the container interface
    'random' => function (ContainerInterface $c) {
        return new Random($c->get(ILogger::class));
    },
    // Using type-hinting as long as ILogger is registered
    'random2' => function (ILogger $logger) {
        return new Random($logger);
    },
    // Better approach
    'uniqid' => function (ContainerInterface $c) {
        return $c->get(Uniqid::class);
    },
    // Best approach
    'microtime' => DI\get(Microtime::class),
]);
$container = $builder->build();

$controller = new IndexController($container->get('random'));
dump($controller->getRandomAction());

$controller = new IndexController($container->get('random2'));
dump($controller->getRandomAction());

$controller = new IndexController($container->get('uniqid'));
dump($controller->getRandomAction());

$controller = new IndexController($container->get('microtime'));
dump($controller->getRandomAction());
