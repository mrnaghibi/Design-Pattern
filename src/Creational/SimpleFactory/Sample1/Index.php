<?php

namespace Pattern\Creational\SimpleFactory\Sample1;

class Index
{
    public static function main()
    {
        $door = DoorFactory::makeDoor(100, 200);
        echo "Width:{$door->getWidth()}\n";
        echo "Height:{$door->getHeight()}";
    }
}
