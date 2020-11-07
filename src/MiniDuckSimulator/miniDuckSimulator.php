<?php

declare(strict_types=1);

require "vendor/autoload.php";

use DP\MiniDuckSimulator\Duck\MallardDuck;
use DP\MiniDuckSimulator\Duck\ModelDuck;
use DP\MiniDuckSimulator\FlyBehavior\FlyWithWings;
use DP\MiniDuckSimulator\FlyBehavior\FlyRocketPowered;

$duck = new MallardDuck();
$duck->display();
$duck->performQuack();
$duck->performFly();
$duck->swim();

echo "\n\n";

$duck = new ModelDuck();
$duck->display();
$duck->performQuack();
$duck->performFly();
$duck->swim();

echo "\n";

$duck->setFlyBehavior(new FlyWithWings());
$duck->performFly();

echo "\n";

$duck->setFlyBehavior(new FlyRocketPowered());
$duck->performFly();

echo "\n\n";