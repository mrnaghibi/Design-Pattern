<?php

namespace Pattern\Structural\Facade\Sample1;

class Index
{
    public static function main()
    {
        $computer = new ComputerFacade(new PC());
        $computer->turnOn();
        $computer->turnOff();
    }
}
