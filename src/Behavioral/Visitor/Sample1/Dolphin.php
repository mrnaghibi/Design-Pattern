<?php


namespace Pattern\Behavioral\Visitor\Sample1;

class Dolphin
{
    public function speak()
    {
        echo "Tuut tuttu tuutt!\n";
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}
