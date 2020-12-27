<?php

namespace Pattern\Creational\FactoryMethod;

class Index
{
    public static function main()
    {
        $devManager = new DevelopmentManager();
        $devManager->takeInterview();
        echo "\n";
        $marketingManager = new MarketingManager();
        $marketingManager->takeInterview();
    }
}
