<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\Duck;

use DP\MiniDuckSimulator\FlyBehavior\FlyNoWay;
use DP\MiniDuckSimulator\QuackBehavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a model duck!\n";
    }
}