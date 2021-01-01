<?php

namespace Pattern\Structural\Adapter\Sample1;

class Index
{
    public static function main()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);
        $hunter = new Hunter();
        $hunter->hunt($wildDogAdapter);
    }
}
