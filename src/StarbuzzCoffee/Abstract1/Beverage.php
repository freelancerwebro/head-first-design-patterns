<?php

declare(strict_types=1);

namespace DP\StarbuzzCoffee\Abstract1;

abstract class Beverage
{
    public abstract function getName(): string;

    public abstract function cost(): float;
}