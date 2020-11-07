<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying with a rocket!\n";
    }
}
