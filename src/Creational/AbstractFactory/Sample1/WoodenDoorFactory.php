<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}
