<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

interface DoorFactory
{
    public function makeDoor(): Door;

    public function makeFittingExpert(): DoorFittingExpert;
}
