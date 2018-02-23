<?php

namespace App\Service\Random;

use App\Service\Logger\ILogger;

class Uniqid implements IRandom
{

  private $logger = null;

  public function __construct(ILogger $logger)
  {
    $this->logger = $logger;
  }

  public function getRandom() {
    $this->logger->log('uniqid');
    return uniqid();
  }

}