<?php

declare(strict_types=1);

namespace DP\StarbuzzCoffee\Abstract1;

abstract class CondimentDecorator extends Beverage
{
    public abstract function getName(): string;
}