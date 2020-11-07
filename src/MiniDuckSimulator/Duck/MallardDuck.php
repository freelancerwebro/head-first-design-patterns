<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\Duck;

use DP\MiniDuckSimulator\FlyBehavior\FlyWithWings;
use DP\MiniDuckSimulator\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a real Mallard Duck!\n";
    }
}