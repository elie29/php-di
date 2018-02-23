<?php

namespace App\Service\Logger;

interface ILogger
{

    const LEVEL_OFF = 0;

    const LEVEL_INFO = 1;

    const LEVEL_DEBUG = 2;

    public function log($message, $level);
}