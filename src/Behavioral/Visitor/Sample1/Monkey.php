<?php


namespace Pattern\Behavioral\Visitor\Sample1;

class Monkey implements Animal
{
    public function shout()
    {
        echo "Ooh oo aa aa!\n";
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}
