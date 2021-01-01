<?php


namespace Pattern\Structural\Adapter\Sample1;

class AfricaLion implements Lion
{

    public function roar()
    {
        echo 'Roar Africa Lion';
    }
}
