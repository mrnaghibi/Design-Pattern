<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class IronDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}
