<?php

namespace Pattern\Structural\Flyweight\Sample1;

class Index
{
    public static function main()
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);
        $shop->takeOrder("less sugar", 1);
        $shop->takeOrder("more milk", 2);
        $shop->takeOrder("without sugar", 5);
        $shop->serve();
    }
}



