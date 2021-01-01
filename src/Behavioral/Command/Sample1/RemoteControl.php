<?php


namespace Pattern\Behavioral\Command\Sample1;

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
