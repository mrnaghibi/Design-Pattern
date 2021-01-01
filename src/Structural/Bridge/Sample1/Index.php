<?php

namespace Pattern\Structural\Bridge\Sample1;

class Index
{
    public static function main()
    {
        $darkTheme = new DarkColor();
        $about = new AboutPage($darkTheme);
        $careers = new CareersPage($darkTheme);

        echo $about->getContent() . "\n";
        echo $careers->getContent();
    }
}





