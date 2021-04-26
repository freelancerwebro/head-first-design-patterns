<?php

declare(strict_types=1);

namespace DP\StarbuzzCoffee\Beverage;

use DP\StarbuzzCoffee\Abstract1\Beverage;

class Decaf extends Beverage
{
    public function getName(): string
    {
        return "Decaf";
    }

    public function cost(): float
    {
        return 1.29;
    }
}