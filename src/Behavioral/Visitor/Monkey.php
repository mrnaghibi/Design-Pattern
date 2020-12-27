<?php


namespace Pattern\Behavioral\Visitor;

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
