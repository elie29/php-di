<?php

namespace App\Service\Logger;

class Logger
{

  private $logs = array();

  public function log($message, $level = 0)
  {
    $this->logs[] = array($message, $level);
  }
}