<?php

namespace Pattern\Creational\AbstractFactory;

class Index
{
    public static function main()
    {
        $woodenFactory = new WoodenDoorFactory();
        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();
        $door->getDescription();
        $expert->getDescription();

        $ironFactory = new IronDoorFactory();
        $door = $ironFactory->makeDoor();
        $expert = $ironFactory->makeFittingExpert();
        $door->getDescription();
        $expert->getDescription();
    }
}
