<?php

namespace Pattern\Structural\Proxy\Sample1;

class Index
{
    public static function main()
    {
        $secureDoor = new SecureDoor(new LabDoor());
        $secureDoor->open('1234');
        $secureDoor->open('password');
        $secureDoor->close();
    }
}
