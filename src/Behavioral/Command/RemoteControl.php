<?php


namespace Pattern\Behavioral\Command;

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
