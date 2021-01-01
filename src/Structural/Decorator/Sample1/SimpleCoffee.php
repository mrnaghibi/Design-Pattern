<?php


namespace Pattern\Structural\Decorator\Sample1;

class SimpleCoffee implements Coffee
{
    public function getCost(): int
    {
        return 10;
    }

    public function getDescription(): string
    {
        return "Simple Coffee";
    }
}
