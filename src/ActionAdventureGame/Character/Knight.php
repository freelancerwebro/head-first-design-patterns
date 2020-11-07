<?php

declare(strict_types=1);

namespace DP\ActionAdventureGame\Character;

class Knight extends Character
{
    public function fight(): void
    {
        echo "Fight with the knight ";
    }
}