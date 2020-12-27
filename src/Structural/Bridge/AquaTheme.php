<?php


namespace Pattern\Structural\Bridge;

class AquaTheme implements Theme
{

    public function getColor(): string
    {
        return "Light Blue";
    }
}
