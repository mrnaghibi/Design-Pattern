<?php


namespace Pattern\Creational\AbstractFactory\Sample1;

class WoodenDoor implements Door
{

    public function getDescription()
    {
        echo "I'm a Wooden Door!\n";
    }
}
