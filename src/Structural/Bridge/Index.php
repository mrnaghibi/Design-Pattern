<?php

namespace Pattern\Structural\Bridge;

class Index
{
    public static function main()
    {
        $darkTheme = new DarkTheme();
        $about = new About($darkTheme);
        $careers = new Careers($darkTheme);

        echo $about->getContent() . "\n";
        echo $careers->getContent();
    }
}





