<?php


namespace Pattern\Creational\AbstractFactory;

class WoodenDoor implements Door
{

    public function getDescription()
    {
        echo "I'm a Wooden Door!\n";
    }
}
