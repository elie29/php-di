<?php
namespace App\Controller;

use App\Service\Random\IRandom;

class IndexController
{

    private $random;

    public function __construct(IRandom $random)
    {
        $this->random = $random;
    }

    public function getRandomAction()
    {
        return $this->random->getRandom();
    }
}