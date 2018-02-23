<?php

namespace App\Service\Random;

use App\Service\Logger\ILogger;

class Microtime implements IRandom
{

  private $logger = null;

  public function __construct(ILogger $logger)
  {
    $this->logger = $logger;
  }

  public function getRandom() {
    $this->logger->log('microtime');
    return dechex(microtime(true));
  }

}