<?php


namespace Pattern\Behavioral\State\Sample1;

class UpperCase implements WritingState
{

    public function write(string $words)
    {
        echo strtoupper($words)."\n";
    }
}
