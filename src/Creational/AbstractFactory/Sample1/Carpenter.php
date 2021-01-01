<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class Carpenter implements DoorFittingExpert
{

    public function getDescription()
    {
        echo "I can only fit wooden doors!\n";
    }
}
