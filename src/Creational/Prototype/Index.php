<?php
namespace Pattern\Creational\Prototype;

class Index
{
    public static function main()
    {
        $original = new Sheep('Jolly');
        echo $original->getName()."\n";
        echo $original->getCategory()."\n";

        $cloned = clone $original;
        $cloned->setName('Dolly');
        echo $cloned->getName()."\n";
        echo $cloned->getCategory();
    }
}
