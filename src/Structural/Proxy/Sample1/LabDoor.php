<?php


namespace Pattern\Structural\Proxy\Sample1;

class LabDoor implements Door
{

    public function open()
    {
        echo "Opening Lab Door!\n";
    }

    public function close()
    {
        echo "Closing Lab Door!\n";
    }
}
