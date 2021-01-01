<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class IronDoor implements Door
{

    public function getDescription()
    {
        echo "I'm an Iron Door!\n";
    }
}
