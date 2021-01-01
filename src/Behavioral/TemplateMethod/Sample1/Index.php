<?php


namespace Pattern\Behavioral\TemplateMethod\Sample1;

class Index
{
    public static function main()
    {
        $androidBuilder = new AndroidBuilder();
        $androidBuilder->build();
        $iosBuilder = new IosBuilder();
        $iosBuilder->build();
    }
}
