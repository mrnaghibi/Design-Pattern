<?php


namespace Pattern\Structural\Adapter;

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}
