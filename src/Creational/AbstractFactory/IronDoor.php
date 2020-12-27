<?php


namespace Pattern\Creational\AbstractFactory;

class IronDoor implements Door
{

    public function getDescription()
    {
        echo "I'm an Iron Door!\n";
    }
}
