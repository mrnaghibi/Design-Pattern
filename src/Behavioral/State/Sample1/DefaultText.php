<?php


namespace Pattern\Behavioral\State\Sample1;

class DefaultText implements WritingState
{

    public function write(string $words)
    {
        echo $words."\n";
    }
}
