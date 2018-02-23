<?php

namespace App\Service\Logger;

class Logger implements ILogger
{

  private $logs = array();

  public function log($message, $level = ILogger::LEVEL_OFF)
  {
    $this->logs[] = array($message, $level);
  }
}