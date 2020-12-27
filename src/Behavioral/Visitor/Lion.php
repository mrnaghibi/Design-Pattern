<?php


namespace Pattern\Behavioral\Visitor;

class Lion implements Animal
{
    public function roar()
    {
        echo "Roaaar!\n";
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}
