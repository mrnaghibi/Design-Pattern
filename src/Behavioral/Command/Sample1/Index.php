<?php


namespace Pattern\Behavioral\Command\Sample1;

class Index
{
    public static function main()
    {
        $bulb = new Bulb();
        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);
        $remote = new RemoteControl();
        $remote->submit($turnOn); // Bulb has been lit!
        $remote->submit($turnOff); // Darkness!
    }
}
