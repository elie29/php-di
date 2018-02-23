<?php

namespace App\Controller;

use App\Service\Random\Random;

class IndexController
{

    private $random;

    public function __construct(Random $random)
    {
        $this->random = $random;
    }

    public function getRandomAction()
    {
        return $this->random->getRandom();
    }
}