<?php


namespace Pattern\Behavioral\Command\Sample1;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}
