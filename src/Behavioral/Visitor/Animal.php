<?php


namespace Pattern\Behavioral\Visitor;

interface Animal
{
    public function accept(AnimalOperation $operation);
}
