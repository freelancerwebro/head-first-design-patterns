<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Weapon;

class Knife implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "cutting with a knife";
    }
}

