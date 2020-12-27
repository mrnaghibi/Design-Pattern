<?php


namespace Pattern\Behavioral\Visitor;

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
