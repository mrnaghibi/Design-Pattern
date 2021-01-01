<?php


namespace Pattern\Structural\Facade\Sample2;

/**
 * EN: The client code does not depend on any subsystem's classes. Any changes
 * inside the subsystem's code won't affect the client code. You will only need
 * to update the Facade.
 */
class Index
{
    public static function main()
    {
        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
        $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
    }
}
