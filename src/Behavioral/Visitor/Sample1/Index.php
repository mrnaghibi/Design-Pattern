<?php


namespace Pattern\Behavioral\Visitor\Sample1;

class Index
{
    public static function main()
    {
        //First Use
        $monkey = new Monkey();
        $lion = new Lion();
        $dolphin = new Dolphin();
        $speak = new Speak();
        $monkey->accept($speak);// Ooh oo aa aa!
        $lion->accept($speak);// Roaaar!
        $dolphin->accept($speak);// Tuut tutt tuutt!

        echo PHP_EOL;
        //Second Use
        $monkey = new Monkey();
        $lion = new Lion();
        $dolphin = new Dolphin();
        $speak = new Speak();
        $jump = new Jump();
        $monkey->accept($speak);// Ooh oo aa aa!
        $monkey->accept($jump);// Jumped 20 feet high! on to the tree!
        $lion->accept($speak);// Roaaar!
        $lion->accept($jump);// Jumped 7 feet! Back on the ground!
        $dolphin->accept($speak);// Tuut tutt tuutt!
        $dolphin->accept($jump);// Walked on water a little and disappeared
    }
}
