<?php

namespace Pattern\Structural\Adapter;

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
