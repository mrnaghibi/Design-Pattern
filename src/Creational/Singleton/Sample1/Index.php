<?php
namespace Pattern\Creational\Singleton\Sample1;

class Index
{
    public static function main()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();
        if ($president1 === $president2) {
            echo "They Are The Same!";
        } else {
            echo "They Are Not Same!";
        }
    }
}
