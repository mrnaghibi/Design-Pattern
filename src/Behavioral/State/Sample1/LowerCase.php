<?php


namespace Pattern\Behavioral\State\Sample1;


class LowerCase implements WritingState
{

    public function write(string $words)
    {
        echo strtolower($words)."\n";
    }
}