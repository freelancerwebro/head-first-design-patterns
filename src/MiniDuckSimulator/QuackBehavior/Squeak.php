<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak Squeak\n";
    }
}