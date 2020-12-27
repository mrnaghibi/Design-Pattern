<?php


namespace Pattern\Behavioral\Visitor;

class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        echo "Jumped 20 feet high! on to the tree!\n";
    }

    public function visitLion(Lion $lion)
    {
        echo "Jumped 7 feet! Back on the ground!\n";
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        echo "Walked on water a little and disappeared!\n";
    }
}
