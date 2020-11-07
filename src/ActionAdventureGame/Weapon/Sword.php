<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Weapon;

class Sword implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "swinging a sword";
    }
}

