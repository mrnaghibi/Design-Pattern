<?php
namespace Pattern\Structural\Decorator\Sample1;

class Index
{
    public static function main()
    {
        $simpleCoffee = new SimpleCoffee();
        echo $simpleCoffee->getCost()." ".$simpleCoffee->getDescription()."\n";

        $someCoffee = new MilkCoffee($simpleCoffee);
        echo $someCoffee->getCost()." ".$someCoffee->getDescription()."\n";

        $someCoffee = new WhipCoffee($someCoffee);
        echo $someCoffee->getCost()." ".$someCoffee->getDescription()."\n";


        $someCoffee = new VanillaCoffee($someCoffee);
        echo $someCoffee->getCost()." ".$someCoffee->getDescription();
    }
}
