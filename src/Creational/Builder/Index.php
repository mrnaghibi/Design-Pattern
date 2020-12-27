<?php

namespace Pattern\Creational\Builder;

class Index
{
    public static function main()
    {
        $burger = (new BurgerBuilder(5))->addPepperoni()->addLettuce()->addTomato()->build();
        echo $burger;
    }
}
