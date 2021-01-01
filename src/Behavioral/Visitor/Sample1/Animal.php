<?php


namespace Pattern\Behavioral\Visitor\Sample1;

interface Animal
{
    public function accept(AnimalOperation $operation);
}
