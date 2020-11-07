<?php

declare(strict_types=1);

require "vendor/autoload.php";

use DP\ActionAdventureGame\Character\King;
use DP\ActionAdventureGame\Character\Knight;
use DP\ActionAdventureGame\Weapon\Knife;
use DP\ActionAdventureGame\Weapon\Sword;

$king = new King;
$king->setWeapon(new Knife());
$king->fight();
$king->useWeapon();

echo "\n\n";

$king = new Knight;
$king->setWeapon(new Sword());
$king->fight();
$king->useWeapon();

echo "\n\n";