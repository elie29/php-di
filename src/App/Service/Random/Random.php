<?php

namespace App\Service\Random;

use App\Service\Logger\Logger;

class Random
{

    private $logger = null;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getRandom()
    {
        $this->logger->log('Random');
        return dechex(rand());
    }
}