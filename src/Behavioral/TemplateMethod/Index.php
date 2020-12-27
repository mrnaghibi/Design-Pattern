<?php


namespace Pattern\Behavioral\TemplateMethod;

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
