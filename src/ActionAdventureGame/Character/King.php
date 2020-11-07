<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Character;

class King extends Character
{
    public function fight(): void
    {
        echo "Fight with the king ";
    }
}