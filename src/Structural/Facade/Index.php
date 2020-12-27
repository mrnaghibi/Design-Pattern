<?php

namespace Pattern\Structural\Facade;

class Index
{
    public static function main()
    {
        $computer = new ComputerFacade(new PC());
        $computer->turnOn();
        $computer->turnOff();
    }
}
