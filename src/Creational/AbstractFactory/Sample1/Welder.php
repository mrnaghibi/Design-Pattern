<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class Welder implements DoorFittingExpert
{

    public function getDescription()
    {
        echo "I can only fit iron doors!\n";
    }
}
