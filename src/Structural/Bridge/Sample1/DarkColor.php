<?php


namespace Pattern\Structural\Bridge\Sample1;

class DarkColor implements Color
{

    public function getColor(): string
    {
        return "Dark Black";
    }
}
