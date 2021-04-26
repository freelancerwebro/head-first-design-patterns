<?php

declare(strict_types=1);

namespace DP\StarbuzzCoffee\Beverage;

use DP\StarbuzzCoffee\Abstract1\Beverage;

class Expresso extends Beverage
{
    public function getName(): string
    {
        return "Expresso";
    }

    public function cost(): float
    {
        return 1.99;
    }
}