<?php


namespace Pattern\Behavioral\State;

class DefaultText implements WritingState
{

    public function write(string $words)
    {
        echo $words."\n";
    }
}
