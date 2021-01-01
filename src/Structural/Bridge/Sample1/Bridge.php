<?php


namespace Pattern\Structural\Bridge\Sample1;

interface Bridge
{
    public function __construct(Color $color);
    public function getContent();
}
