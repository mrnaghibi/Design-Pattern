<?php


namespace Pattern\Structural\Adapter\Sample1;

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}
