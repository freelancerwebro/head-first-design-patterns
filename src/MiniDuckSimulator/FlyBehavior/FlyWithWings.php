<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "Fly with wings\n";
    }
}
