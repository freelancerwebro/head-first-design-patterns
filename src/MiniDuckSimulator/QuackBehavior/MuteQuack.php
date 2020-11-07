<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        // do nothing
    }
}