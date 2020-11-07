<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\QuackBehavior;

interface QuackBehavior
{
    public function quack(): void;
}