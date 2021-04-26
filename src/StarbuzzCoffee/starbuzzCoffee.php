<?php

declare(strict_types=1);

require "vendor/autoload.php";

use DP\StarbuzzCoffee\Beverage\Expresso;
use DP\StarbuzzCoffee\Beverage\Decaf;
use DP\StarbuzzCoffee\Condiment\SteamedMilk;
use DP\StarbuzzCoffee\Condiment\SoyMilk;
use DP\StarbuzzCoffee\Condiment\Mocha;

/*
* ORDER 1:  expresso coffee
*/
$beverage = new Expresso();
echo "ORDER 1: \n";
echo $beverage->getName() . ": "  . $beverage->cost() . " EUR\n\n";


/*
* ORDER 2:  expresso coffee + steamed milk
*/
$beverage2 = new Expresso();
$beverage2 = new SteamedMilk($beverage2);
echo "ORDER 2: \n";
echo $beverage2->getName() . ": "  . $beverage2->cost() . " EUR\n\n";


/*
* ORDER 3:  decaf + soy milk + mocha + mocha
*/
$beverage3 = new Decaf();
$beverage3 = new SoyMilk($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Mocha($beverage3);
echo "ORDER 3: \n";
echo $beverage3->getName() . ": "  . $beverage3->cost() . " EUR\n\n";
