<?php

use App\Controller\IndexController;
use App\Service\Random\Random;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

// Container creation
$container = DI\ContainerBuilder::buildDevContainer();

$controller = new IndexController($container->get(Random::class));
dump($controller->getRandomAction());
