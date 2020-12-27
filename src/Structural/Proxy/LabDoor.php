<?php


namespace Pattern\Structural\Proxy;

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
