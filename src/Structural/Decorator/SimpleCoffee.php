<?php


namespace Pattern\Structural\Decorator;

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
