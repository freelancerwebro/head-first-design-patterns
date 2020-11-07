<?php

declare(strict_types=1);

namespace DP\MiniDuckSimulator\Duck;

use DP\MiniDuckSimulator\FlyBehavior\FlyBehavior;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    abstract public function display(): void;

    public function swim(): void
    {
        echo "Swim like a duck!\n";
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuickBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }
}
