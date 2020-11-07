<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack Quack\n";
    }
}