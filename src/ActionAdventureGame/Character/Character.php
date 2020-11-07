<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Character;

use DP\ActionAdventureGame\Weapon\WeaponBehavior;

abstract class Character
{
    private $weapon;

    abstract public function fight(): void;

    public function setWeapon(WeaponBehavior $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function useWeapon(): void
    {
        echo $this->weapon->useWeapon();
    }
}