<?php

namespace Pattern\Creational\SimpleFactory;

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    /**
     * WoodenDoor constructor.
     *
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}
