<?php

namespace Pattern\Creational\SimpleFactory\Sample1;

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
