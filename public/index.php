<?php

use App\Controller\IndexController;
use App\Service\Random\Random;
use App\Service\Logger\Logger;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$logger = new Logger();
$random = new Random($logger);
$controller = new IndexController($random);

dump($controller->getRandomAction());