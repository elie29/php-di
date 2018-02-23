<?php

namespace App\Service\Random;

use App\Service\Logger\ILogger;

class Random implements IRandom
{

  private $logger = null;

  public function __construct(ILogger $logger)
  {
    $this->logger = $logger;
  }

  public function getRandom() {
    $this->logger->log('Random');
    return dechex(rand());
  }

}