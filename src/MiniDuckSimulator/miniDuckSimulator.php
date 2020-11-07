<?php

declare(strict_types=1);

require "vendor/autoload.php";

use DP\MiniDuckSimulator\Duck\MallardDuck;

$duck = new MallardDuck();
$duck->display();
$duck->performQuack();
$duck->performFly();
$duck->swim();
