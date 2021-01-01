<?php


namespace Pattern\Structural\Bridge\Sample1;

class AquaColor implements Color
{

    public function getColor(): string
    {
        return "Light Blue";
    }
}
