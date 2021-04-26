<?php

declare(strict_types=1);

namespace DP\StarbuzzCoffee\Condiment;

use DP\StarbuzzCoffee\Abstract1\CondimentDecorator;
use DP\StarbuzzCoffee\Abstract1\Beverage;

class SoyMilk extends CondimentDecorator
{
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getName(): string
    {
        return $this->beverage->getName() . ", Soy Milk";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.15;
    }
}