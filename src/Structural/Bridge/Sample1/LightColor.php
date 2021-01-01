<?php


namespace Pattern\Structural\Bridge\Sample1;

class LightColor implements Color
{

    public function getColor(): string
    {
        return "Off White";
    }
}
