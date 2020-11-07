<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly\n";
    }
}
