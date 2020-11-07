<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Weapon;

interface WeaponBehavior
{
    public function useWeapon(): void;
}